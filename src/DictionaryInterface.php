<?php

/*
 * This file is part of mapik/radius-client.
 *
 * (c) Jonas Stendahl <jonas@stendahl.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Mapik\RadiusClient;

interface DictionaryInterface
{
    /**
     * @return array[]
     */
    public function getAttributes();

    /**
     * @return array[]
     */
    public function getVendors();
}
