<?php

namespace App;

class Controller
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }
}
