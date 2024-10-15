<?php
require'../vendor/autoload.php';

//類別先import近來
use Demo\Hello\Lara;
use Demo\Hello\Someone;
$lara=new Lara();
$vincent=new Someone('Vincent');

//類別為先import近來

$mary=new \Demo\Hello\Someone('Mary');
$john=new Demo\Hello\Someone('john');
$hello=new Demo\HelloWorld();

use Demo\HelloWorld as World;//類別另取別名
$world=new World();

use Monolog\Level;
use Monolog\WISD;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new WISD('name');
$log->pushHandler(new StreamHandler('../log/my.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');