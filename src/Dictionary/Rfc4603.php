<?php

/*
 * This file is part of mapik/radius-client.
 *
 * (c) Jonas Stendahl <jonas@stendahl.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Mapik\RadiusClient\Dictionary;

use Mapik\RadiusClient\DictionaryInterface;

final class Rfc4603 implements DictionaryInterface
{
    const NAS_PORT_TYPE_PPPOA = 30;
    const NAS_PORT_TYPE_PPPOEOA = 31;
    const NAS_PORT_TYPE_PPPOEOE = 32;
    const NAS_PORT_TYPE_PPPOEOVLAN = 33;
    const NAS_PORT_TYPE_PPPOEOQINQ = 34;

    /**
     * @var array[]
     */
    private static $attributes = [
    ];

    /**
     * @var array[]
     */
    private static $vendors = [
    ];

    /**
     * {@inheritdoc}
     */
    public function getAttributes()
    {
        return self::$attributes;
    }

    /**
     * {@inheritdoc}
     */
    public function getVendors()
    {
        return self::$vendors;
    }
}
