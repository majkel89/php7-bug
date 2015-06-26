<?php

namespace test\reflected;

use ReflectionProperty;

echo "Case #1 static\n\n";

class Mock extends \test\main\Base {

}

class TestClass extends \PHPUnit_Framework_TestCase {

    use \Xpmock\TestCaseTrait;

    const CLS = '\test\main\Base';

    public function test() {
        $obj = new Mock;

        $p1 = new ReflectionProperty(self::CLS, 'prop');
        if (!$p1->isPublic()) {
            $p1->setAccessible(true);
        }
        $p1->setValue('REFLECTED');

        $actualArgs = $obj->getProp();
        echo "Schould be `REFLECTED` : `".var_export($actualArgs, true)."`\n\n";
    }

}

$test = new TestClass();
$test->test();
