<?php

use \Swoft\App;

// 引入公共的配置.
$config = require App::getAlias('@common/config/beans/log.php');

return array_merge($config,[
    'noticeHandler'      => [
        'class'     => \Swoft\Log\FileHandler::class,
        'logFile'   => '@runtime/logs/notice.log',
        'formatter' => '${lineFormatter}',
        'levels'    => [
            \Swoft\Log\Logger::NOTICE,
            \Swoft\Log\Logger::INFO,
            \Swoft\Log\Logger::DEBUG,
            \Swoft\Log\Logger::TRACE,
        ],
    ],
    'applicationHandler' => [
        'class'     => \Swoft\Log\FileHandler::class,
        'logFile'   => '@runtime/logs/error.log',
        'formatter' => '${lineFormatter}',
        'levels'    => [
            \Swoft\Log\Logger::ERROR,
            \Swoft\Log\Logger::WARNING,
        ],
    ],
    'logger' => [
        'name'          => APP_NAME,
        'enable'        => env('LOG_ENABLE', false),
        'flushInterval' => 100,
        'flushRequest'  => true,
        'handlers'      => [
            '${noticeHandler}',
            '${applicationHandler}',
        ],
    ],
]);