<?php

namespace test\main;

class Base {

    protected static $prop = 'Base Class';

    public function getProp() {
        return static::$prop;
    }

}

include 'case-1-static.php';
include 'case-2-reflection.php';
