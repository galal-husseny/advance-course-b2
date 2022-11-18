<?php
namespace Src;

use Dotenv\Dotenv;
use Src\Http\Request;
use Src\Http\Response;
use Src\Http\Route;

class Application {
    public Request $request;
    public Response $response;
    public Route $route;
    public Dotenv $env;


    public function __construct() {
        $this->request = new Request;
        $this->response = new response;
        $this->route = new Route($this->request,$this->response);
        $this->env = Dotenv::createImmutable(base_path());
    }

    public function run()
    {
        $this->env->safeLoad();
        $this->route->resolve();
    }
}