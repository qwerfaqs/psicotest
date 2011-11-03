<?php
require_once dirname(__FILE__).'/../bootstrap/unit.php';
$configuration = ProjectConfiguration::getApplicationConfiguration( 'frontend', 'test', true);
new sfDatabaseManager($configuration);


$dir = sfConfig::get("sf_lib_dir")."/phpexel/php/";
$source = $dir."baby.xlsx";
$dest = $dir."vauquita.xlsx";
copy($source, $dest);
//do stuff
unlink($dest);

?>