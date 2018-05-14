<?php
namespace App;

class Fibonacci
{
    private $f;

    public function shift($n)
    {
        $a1 = 0;
        $a2 = 1;
        $a3 = 1;

        if ($n <= 2) {
            return 1;
        }

        for ($i=3; $i<=$n; $i++) {
            $a1 = $a2;
            $a2 = $a3;
            $a3 = $a1+$a2;
            $this->f[$i] = $a3;
        }
        return $this->f[$n];
    }

    public function recursion($n)
    {
        return $n<=2 ? 1 : $this->recursion($n-1)+ $this->recursion($n-2);
    }
}
