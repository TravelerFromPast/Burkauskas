<?php 
namespace Burkauskas;

use core\EquationInterface;

Class QuEquation extends Equation implements EquationInterface{


	public function qu_solve($a, $b, $c){

		$x = $this->dis($a, $b, $c);

	    if($a == 0){
	        return $this->solve($b,$c);
	    }

		if ($x > 0){
		    return $this->X=array(
		        -($b+sqrt($b**2-4*$a*$c)/2*$a), 
		        -($b-sqrt($b**2-4*$a*$c)/2*$a)
		        );
		}

		if($x == 0){
			return $this->X=array(-($b/2*$a));
		}

		throw new BurkauskasException("Ошибка: уравнение не имеет корней.");

	}
	protected function dis($a, $b, $c){
        return $a = ($b**2)-4*$a*$c;
    }
}

?>