<?php

namespace test\main;

require_once 'vendor/autoload.php';

abstract class Base {

    protected static $prop = 'BASE';

    public function getProp() {
        return static::$prop;
    }

}

include 'case-2-reflection.php';
