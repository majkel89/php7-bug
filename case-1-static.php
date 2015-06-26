<?php

namespace test\stat;

echo "Case #1 static\n\n";

use test\main\Base;

class B extends Base {

    protected static $prop = [
        'B' => 1,
    ];

}

$b = new B;
echo "Schould be [B => 1, x => 1] : ".  var_export($b->getProp(), true)."\n\n";
