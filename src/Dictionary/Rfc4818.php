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

final class Rfc4818 implements DictionaryInterface
{
    /**
     * @var array<array-key, array<string, mixed>>
     */
    private static $attributes = [
        [
            'encoder' => [
                'class' => Attributes\OctetsAttribute::class,
                'options' => [
                ],
            ],
            'has_tag' => false,
            'name' => 'Delegated-IPv6-Prefix',
            'type' => 123,
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
