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

final class Rfc4675 implements DictionaryInterface
{
    const INGRESS_FILTERS_ENABLED = 1;
    const INGRESS_FILTERS_DISABLED = 2;

    /**
     * @var array<array-key, array<string, mixed>>
     */
    private static $attributes = [
        [
            'encoder' => [
                'class' => Attributes\IntegerAttribute::class,
                'options' => [
                ],
            ],
            'has_tag' => false,
            'name' => 'Egress-VLANID',
            'type' => 56,
            'vendor' => null,
        ],
        [
            'encoder' => [
                'class' => Attributes\IntegerAttribute::class,
                'options' => [
                ],
            ],
            'has_tag' => false,
            'name' => 'Ingress-Filters',
            'type' => 57,
            'vendor' => null,
        ],
        [
            'encoder' => [
                'class' => Attributes\StringAttribute::class,
                'options' => [
                ],
            ],
            'has_tag' => false,
            'name' => 'Egress-VLAN-Name',
            'type' => 58,
            'vendor' => null,
        ],
        [
            'encoder' => [
                'class' => Attributes\OctetsAttribute::class,
                'options' => [
                ],
            ],
            'has_tag' => false,
            'name' => 'User-Priority-Table',
            'type' => 59,
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
