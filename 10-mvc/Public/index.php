<?php

use Src\Http\Request;
use Src\Http\Response;
use Src\Http\Route;
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
require base_path('Routes/web.php');
$route = new Route(new Request,new Response);
$route->resolve();
