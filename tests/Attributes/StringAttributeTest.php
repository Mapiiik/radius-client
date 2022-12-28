<?php

/*
 * This file is part of mapik/radius-client.
 *
 * (c) Jonas Stendahl <jonas@stendahl.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Mapik\RadiusClient\Tests\Attributes;

use Mapik\RadiusClient\Attributes\StringAttribute;
use Mapik\RadiusClient\Exceptions\InvalidArgumentException;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @covers \Mapik\RadiusClient\Attributes\StringAttribute
 */
final class StringAttributeTest extends TestCase
{
    /**
     * @throws InvalidArgumentException
     */
    public function testEncodeDecode()
    {
        $foobar = 'foobar';
        $decoded = StringAttribute::decode(StringAttribute::encode($foobar, $foobar, $foobar), $foobar, $foobar);

        $this->assertSame($foobar, $decoded);
    }
}
