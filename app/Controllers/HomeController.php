<?php

namespace App\Controllers;

use App\Controller;

class HomeController extends Controller
{
    public function index($request, $response)
    {
        // Sample log message
        $this->container->logger->info("slim-rest-api '/' route");

        return 'Home Controller';
    }
}
