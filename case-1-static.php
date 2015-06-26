<?php

namespace test\stat;

echo "Case #1 static\n\n\t";

use test\main\Base;

class B extends Base {

    protected static $prop = 'B class';

}

$b = new B;
echo "Schould be `B class` : `{$b->getProp()}`\n\n";
