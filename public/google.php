<?php

require_once __DIR__.'/../vendor/autoload.php';

$db = App\GlobalSheetbase::getInstance();

$db->setDatabase('global');
$db->setTable('table1');
var_dump($db->get(0, 0));
