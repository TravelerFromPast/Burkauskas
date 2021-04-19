<?php
use Burkauskas\Equation;
use PHPUnit\Framework\TestCase;


class EquationTest extends TestCase {
    /**
     * @dataProvider providerOne_Solve
     * @param $a
     * @param $b
     * @param $c
     */

    public function testOne_solve($a, $b, $c){
        $test = new Equation();
        $this->assertEquals([$c], $test->solveL($a, $b));
    }

    public function providerOne_solve(){
        return array (
            array (1, 1, -1),
            array (-6, 6, 1),
            array (1000, 77, -0.077)
        );
    }

    /**
     * @dataProvider providerOne_SolveEx
     * @param $a
     * @param $b
     * @param $c
     */
    public function testEquationEx($a, $b, $c) {
        $this->expectException(\burkauskas\BurkauskasException::class);
        $test = new Equation();
        $this->assertEquals($c, $test->solveL($a, $b));
    }
    public function providerOne_SolveEx ()
    {
        return array (
            array (0, 1, -1),
            array (0, 0, 0),
            array (null, null, 0),

        );
    }
}