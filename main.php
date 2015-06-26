<?php

namespace test\main;

require_once 'vendor/autoload.php';

abstract class Base {

    protected $_arguments = [];

    protected static $prop = [
    ];

    public function getProp() {
        return array_merge(static::$prop, $this->_arguments);
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value) {
        $this->_arguments[$name] = $value;
    }

}

include 'case-1-static.php';
include 'case-2-reflection.php';
