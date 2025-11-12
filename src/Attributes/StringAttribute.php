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

use Override;

final class StringAttribute implements AttributeInterface
{
    /**
     * {@inheritdoc}
     *
     * @return string
     */
    #[Override]
    public static function decode($message, $authenticator, $secret, ?array $options = null)
    {
        return $message;
    }

    /**
     * {@inheritdoc}
     *
     * @param string $value
     */
    #[Override]
    public static function encode($value, $authenticator, $secret, ?array $options = null)
    {
        return $value;
    }
}
