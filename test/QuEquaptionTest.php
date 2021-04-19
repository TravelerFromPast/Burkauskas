<?php
use Burkauskas\QuEquation;
use PHPUnit\Framework\TestCase;


class QuEquationTest extends TestCase {

    /**
     * @dataProvider providerSolve
     * @param $a
     * @param $b
     * @param $c
     * @param $d
     */
    public function testSolve($a, $b, $c, $d) {
        $test = new QuEquation();
        $this->assertEquals($d, $test->solve($a, $b, $c));
    }
    public function providerSolve()
    {
        return array (
            array (15, 9, 0,[0, -0.6]),
            array (1, 6, -20, [2.3851648071345037, -8.385164807134505]),
            array (0, 1, 1,[-1]),
            array (0, 1, 2, [-2.0]),

        );
    }

    /**
     * @dataProvider providerQuEquationEx
     * @param $a
     * @param $b
     * @param $c
     * @param $d
     */
    public function testQuEquationEX($a, $b, $c, $d) {
        $this->expectException(\burkauskas\BurkauskasException::class);
        $test = new QuEquation();
        $this->assertEquals($d, $test->solve($a, $b, $c));
    }
    public function providerQuEquationEx (): array
    {
        return array (
            array (0, 0, 0, 0),
            array (4, 2, 1, 0),
       //     array ('a', 'b', 'c', 0),
        );
    }
}
?>