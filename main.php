<?php

abstract class Base {

    protected static $prop = 'BASE';

    public function getProp() {
        return static::$prop;
    }

}

class Mock extends Base {

}

$obj = new Mock;

$p1 = new ReflectionProperty('Base', 'prop');
if (!$p1->isPublic()) {
    $p1->setAccessible(true);
}
$p1->setValue('REFLECTED');

$actualArgs = $obj->getProp();
echo "Schould be `REFLECTED` : `".var_export($actualArgs, true)."`\n";
