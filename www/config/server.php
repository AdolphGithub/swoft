<?php
use \Swoft\App;

// 引入公共的配置.
$config = require App::getAlias('@common/config/server.php');

return array_merge($config,[
    'server'  => [
        'pfile'      => alias(env('PFILE', '@runtime/swoft.pid')),
        'pname'      => env('PNAME', 'php-swoft'),
        'tcpable'    => env('TCPABLE', true),
        'cronable'   => env('CRONABLE', false),
        'autoReload' => env('AUTO_RELOAD', true),
    ],
    'tcp'     => [
        'host'               => env('TCP_HOST', '0.0.0.0'),
        'port'               => env('TCP_PORT', 8099),
        'mode'               => env('TCP_MODE', SWOOLE_PROCESS),
        'type'               => env('TCP_TYPE', SWOOLE_SOCK_TCP),
        'package_max_length' => env('TCP_PACKAGE_MAX_LENGTH', 2048),
        'open_eof_check'     => env('TCP_OPEN_EOF_CHECK', false),
        'open_eof_split'     => env('TCP_OPEN_EOF_SPLIT', true),
        'package_eof'        => "\r\n",
        'client' => [
            'package_max_length' => env('TCP_CLIENT_PACKAGE_MAX_LENGTH', 1024 * 1024 * 2),
            'open_eof_check'     => env('TCP_CLIENT_OPEN_EOF_CHECK', false),
            'open_eof_split'     => env('TCP_CLIENT_OPEN_EOF_SPLIT', true),
            'package_eof'        => "\r\n",
        ],
    ],
    'http'    => [
        'host'  => env('HTTP_HOST', '0.0.0.0'),
        'port'  => env('HTTP_PORT', 80),
        'mode'  => env('HTTP_MODE', SWOOLE_PROCESS),
        'type'  => env('HTTP_TYPE', SWOOLE_SOCK_TCP),
    ],
    'ws'  => [
        // enable handle http request ?
        'enable_http' => env('WS_ENABLE_HTTP', true),
        // other settings will extend the 'http' config
        // you can define separately to overwrite existing settings
    ],
    'crontab' => [
        'task_count' => env('CRONTAB_TASK_COUNT', 1024),
        'task_queue' => env('CRONTAB_TASK_QUEUE', 2048),
    ],
]);
