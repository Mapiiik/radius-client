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

use Mapik\RadiusClient\Attributes;
use Mapik\RadiusClient\DictionaryInterface;

final class Rfc2867 implements DictionaryInterface
{
    const ACCT_STATUS_TYPE_TUNNEL_START = 9;
    const ACCT_STATUS_TYPE_TUNNEL_STOP = 10;
    const ACCT_STATUS_TYPE_TUNNEL_REJECT = 11;
    const ACCT_STATUS_TYPE_TUNNEL_LINK_START = 12;
    const ACCT_STATUS_TYPE_TUNNEL_LINK_STOP = 13;
    const ACCT_STATUS_TYPE_TUNNEL_LINK_REJECT = 14;

    /**
     * @var array[]
     */
    private static $attributes = [
        [
            'encoder' => [
                'class' => Attributes\StringAttribute::class,
                'options' => [
                ],
            ],
            'has_tag' => false,
            'name' => 'Acct-Tunnel-Connection',
            'type' => 68,
            'vendor' => null,
        ],
        [
            'encoder' => [
                'class' => Attributes\IntegerAttribute::class,
                'options' => [
                ],
            ],
            'has_tag' => false,
            'name' => 'Acct-Tunnel-Packets-Lost',
            'type' => 86,
            'vendor' => null,
        ],
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
