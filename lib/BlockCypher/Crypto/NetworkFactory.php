<?php

namespace BlockCypher\Crypto;

use BitWasp\Bitcoin\Network\NetworkFactory as BitWaspNetworkFactory;

class NetworkFactory extends BitWaspNetworkFactory
{
    /**
     * @return NetworkInterface
     * @throws \Exception
     */
    public static function bcy()
    {
        return new Networks\Bcy();
    }
}

