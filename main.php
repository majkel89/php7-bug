<?php
class Base {
    protected static $prop = 'BASE';
    public function getProp() {
        return static::$prop;
    }
}
class Mock extends Base { }

$obj = new Base;
$excepted = 'REFLECTED';

$property = new ReflectionProperty('Base', 'prop');
$property->setAccessible(true);
$property->setValue($excepted);

$actual = $obj->getProp();
echo "Schould be `{$excepted}` and is `{$actual}`\n";
exit($actual !== $excepted ? 1 : 0);
?>