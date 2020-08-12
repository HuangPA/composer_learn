<?php
namespace Plant\Test;

use Plant\Flower\Rose\Rose;
use Plant\Flower\Lily\Lily;
use Plant\Tree\Apple;

class Test
{
    public function __construct()
    {
        $rose = new Rose();
        $lily = new Lily();

        echo $rose->desc();
        echo "\n";
        echo $lily->desc();

        $apple = new Apple();
        $apple->desc();
    }
}
