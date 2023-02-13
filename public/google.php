<?php

require_once __DIR__.'/../vendor/autoload.php';

$db = App\GlobalSheetbase::getInstance();

$db->setDatabase('global');
$db->setTable('table1');
var_dump($db->get(0, 0));


?>
<iframe width="100%" height="400" src="https://docs.google.com/spreadsheets/d/1-SQHS23HPxNoEXSss7nAMShZMz5wwM8VAd8o16X6WRs/edit?userstoinvite=sheetbase-demo@sheetbase-demo.iam.gserviceaccount.com#gid=0"></iframe>
