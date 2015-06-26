<?php

namespace test\reflected;

echo "Case #1 static\n\n";

class TestClass extends \PHPUnit_Framework_TestCase {

    use \Xpmock\TestCaseTrait;

    const CLS = '\test\main\Base';

    public function test() {
        $obj = $this->mock(self::CLS)->new();
        $this->reflect(self::CLS)->prop = array(
            'a' => 1,
            'b' => 1,
            'c' => 1,
        );
        $obj->d = 2;
        $obj->c = 2;
        $actualArgs = $this->reflect($obj)->getProp();
        echo "Schould be [a => 1, b => 1, c => 2, d => 2] : ".var_export($actualArgs, true)."\n\n";
    }

}

$test = new TestClass();
$test->test();
