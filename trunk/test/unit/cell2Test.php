<?php
require_once dirname(__FILE__).'/../bootstrap/unit.php';
$configuration = ProjectConfiguration::getApplicationConfiguration( 'frontend', 'test', true);
new sfDatabaseManager($configuration);

$t = new lime_test(20);
$obj = new BaseHojaMillon();
for ($index = 1; $index <= 10; $index++) {
    $t->is($obj->cell2col("A".$index), "A", "cell2coll(\"A".$index."\") retorna A");
}

for ($index = 1; $index <= 10; $index++) {
    $t->is($obj->cell2row("A".$index), $index, "cell2row(\"A".$index."\") retorna $index");
}
