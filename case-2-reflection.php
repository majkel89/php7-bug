<?php

namespace test\reflected;

echo "Case #1 static\n\n\t";

use test\main\Base;
use ReflectionProperty;

class Mock extends Base {

}

$p1 = new ReflectionProperty('\test\reflected\Mock', 'prop');
$p1->setAccessible(true);
$p1->setValue('REFLECTED');

$p2 = new ReflectionProperty('\test\reflected\Mock', 'prop');
$p2->setAccessible(true);

echo "Schould be `REFLECTED` : `{$p2->getValue()}`\n\n";
