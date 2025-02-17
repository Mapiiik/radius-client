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

interface AttributeInterface
{
    /**
     * @param string     $message
     * @param string     $authenticator
     * @param string     $secret
     * @param null|array $options
     *
     * @throws InvalidArgumentException
     *
     * @return mixed
     */
    public static function decode($message, $authenticator, $secret, array $options = null);

    /**
     * @param mixed      $value
     * @param string     $authenticator
     * @param string     $secret
     * @param null|array $options
     *
     * @throws InvalidArgumentException
     *
     * @return string
     */
    public static function encode($value, $authenticator, $secret, array $options = null);
}
