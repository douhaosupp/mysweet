<?php
define('ROOT_PATH',__DIR__);
include ROOT_PATH.'/config/src.php';
include ROOT_PATH.'/sweet/sweet.php';

$sweet = new sweet();
$sweet->run();