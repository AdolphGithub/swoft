<?php

use Swoft\App;

// 模块的自定义.
! defined('DS') && define('DS', DIRECTORY_SEPARATOR);
// module name
! defined('MODULE_NAME') && define('MODULE_NAME', 'admin');

! defined('BASE_PATH') && define('BASE_PATH', App::getAlias('@project') . DS . MODULE_NAME);

// Register alias
$aliases = [
    '@root'       => BASE_PATH,
    '@env'        => '@root',
    '@app'        => '@root/app',
    '@res'        => '@root/resources',
    '@runtime'    => '@root/runtime',
    '@configs'    => '@root/config',
    '@resources'  => '@root/resources',
    '@beans'      => '@configs/beans',
    '@properties' => '@configs/properties',
    '@console'    => '@beans/console.php',
    '@commands'   => '@app/command',
];

App::setAliases($aliases);