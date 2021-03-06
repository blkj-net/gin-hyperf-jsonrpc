<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    'consumers' => [
        [
            'name' => 'GoService',
            'nodes' => [
                ['host' => '127.0.0.1', 'port' => 3233]
            ],
        ],
    ],
];

