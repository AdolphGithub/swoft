<?php

use \Swoft\App;

! defined('PROJECT_PATH') && define('PROJECT_PATH', dirname(__DIR__,2));

! defined('APP_NAME') && define('APP_NAME', 'advanced');

// Register alias
$aliases = [
    '@project'    => PROJECT_PATH,
    '@common'     => '@project/common',
    '@vendor'     => '@project/vendor',
];

App::setAliases($aliases);