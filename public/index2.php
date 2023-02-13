<?php

require_once __DIR__.'/../vendor/autoload.php';

$query1 = file_get_contents('php://input');
$parser = new PhpMyAdmin\SqlParser\Parser($query1);

// inspect query
var_dump($parser);