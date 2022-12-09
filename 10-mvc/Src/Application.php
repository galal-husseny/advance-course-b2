<?php
namespace Src;

use Dotenv\Dotenv;
use Src\Database\DB;
use Src\Database\Mangers\MYSQLManger;
use Src\Database\Mangers\SQLLITEManger;
use Src\Http\Request;
use Src\Http\Response;
use Src\Http\Route;

class Application {
    public Request $request;
    public Response $response;
    public Route $route;
    public Dotenv $env;
    public DB $db;

    public function __construct() {
        $this->request = new Request;
        $this->response = new response;
        $this->route = new Route($this->request,$this->response);
        $this->env = Dotenv::createImmutable(base_path());
        $this->db = new DB($this->getDatabaseDrivier());
    }

    public function run()
    {
        $this->env->safeLoad();
        $this->route->resolve();
        $this->db->init();
    }

    private function getDatabaseDrivier(){
        return match(env('DB_DRIVER')){
            'mysql'=> new MYSQLManger,
            'sqllite'=> new SQLLITEManger,
            default => new MYSQLManger
        };
    }
}