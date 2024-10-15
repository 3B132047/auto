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