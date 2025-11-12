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

final class Rfc4372 implements DictionaryInterface
{
    /**
     * @var array[]
     */
    private static $attributes = [
        [
            'encoder' => [
                'class' => Attributes\OctetsAttribute::class,
                'options' => [
                ],
            ],
            'has_tag' => false,
            'name' => 'Chargeable-User-Identity',
            'type' => 89,
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
