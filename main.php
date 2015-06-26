<?php

namespace test\main;

abstract class Base {

    protected static $prop = [
    ];

    public function getProp() {
        return array_merge(static::$prop, ['x' => 1]);
    }

}

include 'case-1-static.php';
include 'case-2-reflection.php';
