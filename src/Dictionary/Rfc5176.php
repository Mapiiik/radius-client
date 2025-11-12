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
use Override;

final class Rfc5176 implements DictionaryInterface
{
    const ERROR_CAUSE_INVALID_ATTRIBUTE_VALUE = 407;
    const ERROR_CAUSE_MULTIPLE_SESSION_SELECTION_UNSUPPORTED = 508;

    /**
     * @var array<array-key, array<string, mixed>>
     */
    private static $attributes = [
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
