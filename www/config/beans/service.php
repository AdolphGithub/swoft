<?php
use \Swoft\App;

// 引入公共的配置.
$config = require App::getAlias('@common/config/beans/service.php');

return array_merge($config,[

]);