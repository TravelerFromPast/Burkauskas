<?php
namespace Burkauskas;

Class A
{
    public function lin($a, $b)
    {
        if($a==0)
        {
            throw new BurkauskasException(null);
        }
        MyLog::log("Определено что это линейное уравнение");
        return $this->x=array(-($b/$a));
    }
    protected $x;
}
?>