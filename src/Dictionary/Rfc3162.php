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
use Override;

final class Rfc3162 implements DictionaryInterface
{
    /**
     * @var array<array-key, array<string, mixed>>
     */
    private static $attributes = [
        [
            'encoder' => [
                'class' => Attributes\IpAddressAttribute::class,
                'options' => [
                    0 => 2097152,
                ],
            ],
            'has_tag' => false,
            'name' => 'NAS-IPv6-Address',
            'type' => 95,
            'vendor' => null,
        ],
        [
            'encoder' => [
                'class' => Attributes\OctetsAttribute::class,
                'options' => [
                ],
            ],
            'has_tag' => false,
            'name' => 'Framed-Interface-Id',
            'type' => 96,
            'vendor' => null,
        ],
        [
            'encoder' => [
                'class' => Attributes\OctetsAttribute::class,
                'options' => [
                ],
            ],
            'has_tag' => false,
            'name' => 'Framed-IPv6-Prefix',
            'type' => 97,
            'vendor' => null,
        ],
        [
            'encoder' => [
                'class' => Attributes\IpAddressAttribute::class,
                'options' => [
                    0 => 2097152,
                ],
            ],
            'has_tag' => false,
            'name' => 'Login-IPv6-Host',
            'type' => 98,
            'vendor' => null,
        ],
        [
            'encoder' => [
                'class' => Attributes\StringAttribute::class,
                'options' => [
                ],
            ],
            'has_tag' => false,
            'name' => 'Framed-IPv6-Route',
            'type' => 99,
            'vendor' => null,
        ],
        [
            'encoder' => [
                'class' => Attributes\StringAttribute::class,
                'options' => [
                ],
            ],
            'has_tag' => false,
            'name' => 'Framed-IPv6-Pool',
            'type' => 100,
            'vendor' => null,
        ],
    ];

    /**
     * @var array<array-key, array<string, mixed>>
     */
    private static $vendors = [
    ];

    /**
     * {@inheritdoc}
     */
    #[Override]
    public function getAttributes()
    {
        return self::$attributes;
    }

    /**
     * {@inheritdoc}
     */
    #[Override]
    public function getVendors()
    {
        return self::$vendors;
    }
}
