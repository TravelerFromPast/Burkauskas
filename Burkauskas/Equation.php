<?php
namespace Burkauskas;

Class Equation
{
    public function solveL($a, $b)
    {
        if($a==0)
        {
            throw new BurkauskasException('Уравнение не имеет решений');
        }
        MyLog::log("Определено что это линейное уравнение");
        return $this->x=array(-($b/$a));
    }
    protected $x;
}
