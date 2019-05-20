<?php
require_once dirname(dirname(__DIR__)) . '/vendor/autoload.php';
// 加载公共的定义.
require_once dirname(dirname(__DIR__)) . '/common/config/define.php';
// 加载模块定义.
require_once dirname(__DIR__) . '/config/define.php';

// init the factory of bean
\Swoft\Bean\BeanFactory::init();

/* @var \Swoft\Bootstrap\Boots\Bootable $bootstrap*/
$bootstrap = \Swoft\App::getBean(\Swoft\Bootstrap\Bootstrap::class);
$bootstrap->bootstrap();
