<?php
use \Swoft\App;

// 引入公共的配置.
$config = require App::getAlias('@common/config/beans/base.php');

return array_merge($config, [
    'serverDispatcher' => [
        'middlewares' => [
            \Swoft\View\Middleware\ViewMiddleware::class,
            // \Swoft\Devtool\Middleware\DevToolMiddleware::class,
            // \Swoft\Session\Middleware\SessionMiddleware::class,
        ]
    ],
    'httpRouter'       => [
        'ignoreLastSlash'  => false,
        'tmpCacheNumber' => 1000,
        'matchAll'       => '',
    ],
    'requestParser'    => [
        'parsers' => [

        ],
    ],
    'view'             => [
        'viewsPath' => '@resources/views/',
    ],
    'cache'            => [
        'driver' => 'redis',
    ],
    'demoRedis' => [
        'class' => \Swoft\Redis\Redis::class,
        'poolName' => 'demoRedis'
    ]
]);
