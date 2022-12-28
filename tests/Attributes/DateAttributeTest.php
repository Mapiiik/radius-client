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

use Mapik\RadiusClient\Attributes\DateAttribute;
use Mapik\RadiusClient\Exceptions\InvalidArgumentException;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @covers \Mapik\RadiusClient\Attributes\DateAttribute
 */
final class DateAttributeTest extends TestCase
{
    /**
     * @throws \Exception
     * @throws InvalidArgumentException
     */
    public function testEncodeDecode()
    {
        $foobar = 'foobar';
        $date = new \DateTimeImmutable();
        $decoded = DateAttribute::decode(DateAttribute::encode($date, $foobar, $foobar), $foobar, $foobar);

        $this->assertSame($date->getTimestamp(), $decoded->getTimestamp());
    }

    /**
     * @throws \Exception
     * @throws InvalidArgumentException
     */
    public function testEncodeInvalidArgument()
    {
        $this->expectException(InvalidArgumentException::class);

        $foobar = 'foobar';

        DateAttribute::encode($foobar, $foobar, $foobar);
    }
}
