<?php

require_once("system/libs/Init.php");
use system\libs\init;
new Init();

/**
*
*/

echo "<hr color=blue size=3>";
 
use system\libs\model;
$xx = new Model();
// $xx -> run();

print_r(get_included_files());
