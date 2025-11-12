<?php

/*
 * This file is part of mapik/radius-client.
 *
 * (c) Jonas Stendahl <jonas@stendahl.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Mapik\RadiusClient\Attributes;

use Mapik\RadiusClient\Exceptions\InvalidArgumentException;
use Override;

final class StringEncryptOneAttribute implements AttributeInterface
{
    /**
     * {@inheritdoc}
     *
     * @return string
     */
    #[Override]
    public static function decode($message, $authenticator, $secret, ?array $options = null)
    {
        $messageLength = strlen($message);

        if ($messageLength < 16 || $messageLength > 128) {
            throw new InvalidArgumentException('The messageLength must be between 16 and 128 characters');
        }

        if ('' === $secret) {
            throw new InvalidArgumentException('The secret cannot be empty');
        }

        if ('' === $authenticator) {
            throw new InvalidArgumentException('The authenticator cannot be empty');
        }

        $password = md5($secret.$authenticator, true);
        $parts = str_split($message, 16);

        foreach (str_split($parts[0], 1) as $i => $character) {
            $password[$i] = $password[$i] ^ $character;
        }

        for ($i = 1; $i * 16 < $messageLength; ++$i) {
            $password .= md5($secret.$parts[$i - 1], true);

            foreach (str_split($parts[$i], 1) as $j => $character) {
                $offset = $i * 16 + $j;
                $password[$offset] = $password[$offset] ^ $character;
            }
        }

        return rtrim($password, "\x00");
    }

    /**
     * {@inheritdoc}
     *
     * @param string $value
     */
    #[Override]
    public static function encode($value, $authenticator, $secret, ?array $options = null)
    {
        $password = $value;

        while (0 !== strlen($password) % 16) {
            $password .= "\x00";
        }

        $passwordLength = strlen($password);

        if ($passwordLength > 128) {
            throw new InvalidArgumentException('The value must be less than 128 characters');
        }

        if ('' === $secret) {
            throw new InvalidArgumentException('The secret cannot be empty');
        }

        if (16 !== strlen($authenticator)) {
            throw new InvalidArgumentException('The authenticator cannot be empty');
        }

        $value = md5($secret.$authenticator, true);
        $parts = str_split($password, 16);

        foreach (str_split($parts[0], 1) as $i => $character) {
            $value[$i] = $value[$i] ^ $character;
        }

        for ($i = 1; $i * 16 < $passwordLength; ++$i) {
            $value .= md5($secret.$parts[$i - 1], true);

            foreach (str_split($parts[$i], 1) as $j => $character) {
                $offset = $i * 16 + $j;
                $value[$offset] = $value[$offset] ^ $character;
            }
        }

        return $value;
    }
}
