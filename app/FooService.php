<?php

namespace App;

use Illuminate\Support\ServiceProvider;

class FooService
{
    public function register($a, $b, $c, $d)
    {
        echo $a;
        echo $b;
        echo $c;
        echo $d;
    }
}
