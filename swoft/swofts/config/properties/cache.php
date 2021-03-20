<?php

/*
 * This file is part of Swoft.
 * (c) Swoft <group@swoft.org>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$redis_ip=gethostbyname('redis');
return [
    'redis'     => [
        'name'        => 'redis',
        'uri'         => [
            $redis_ip.':6379',
            $redis_ip.':6379',
        ],
        'minActive'   => 8,
        'maxActive'   => 8,
        'maxWait'     => 8,
        'maxWaitTime' => 3,
        'maxIdleTime' => 60,
        'timeout'     => 8,
        'db'          => 1,
        'prefix'      => 'redis_',
        'serialize'   => 0,
    ],
    'demoRedis' => [
        'db'     => 2,
        'prefix' => 'demo_redis_',
    ],
];