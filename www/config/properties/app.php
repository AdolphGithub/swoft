<?php
use \Swoft\App;

// 引入公共的配置.
$config = require App::getAlias('@common/config/properties/app.php');

return array_merge($config,[
    'env'          => env('APP_ENV', 'test'),
    'debug'        => env('APP_DEBUG', true),
]);
