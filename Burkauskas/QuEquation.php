<?php 
namespace Burkauskas;

use core\EquationInterface;

Class QuEquation extends Equation implements EquationInterface{


	public function solve(float $a, float $b, float $c): array{

		$x = $this->dis($a, $b, $c);

	    if($a == 0){
	        return $this->solveL($b,$c);
	    }

		if ($x > 0){
		    return $this->x=array(
                (-$b+sqrt($x))/(2*$a),
                (-$b-sqrt($x))/(2*$a)
		        );
		}

		if($x == 0){
			return $this->x=array(-($b/2*$a));
		}

		throw new BurkauskasException("Ошибка: уравнение не имеет корней.");

	}
	protected function dis($a, $b, $c){
        return $a = ($b**2)-4*$a*$c;
    }

}
