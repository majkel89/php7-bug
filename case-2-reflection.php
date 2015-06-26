<?php

namespace test\reflected;

echo "Case #1 static\n\n";

use test\main\Base;
use ReflectionProperty;

class Mock extends Base {

}

$obj = new Mock;

$p1 = new ReflectionProperty('\test\reflected\Mock', 'prop');
$p1->setAccessible(true);
$p1->setValue(['R' => 1]);

$p2 = new ReflectionProperty('\test\reflected\Mock', 'prop');
$p2->setAccessible(true);


echo "Schould be [R => 1, x => 1] : ".var_export($obj->getProp(), true)."\n\n";
