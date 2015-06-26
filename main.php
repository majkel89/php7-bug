<?php

namespace test\main;

require_once 'vendor/autoload.php';

abstract class Base {

    protected $_arguments = [];

    protected static $prop = [
    ];

    public function getProp() {
        return static::$prop;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value) {
        $this->_arguments[$name] = $value;
    }

}

include 'case-2-reflection.php';
