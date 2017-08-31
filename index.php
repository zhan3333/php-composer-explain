<?php
/**
 * 项目根目录
 * User: 39096
 * Date: 2017/8/31
 * Time: 22:45
 */

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

$log->error('test');