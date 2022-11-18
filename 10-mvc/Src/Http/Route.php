<?php 
namespace Src\Http;

class Route {
    private static array $routes = []; 
    public function __construct(public Request $request ,public Response $response) {

    }
    public static function get(string $url ,callable|array|string $action)
    {
        url_slash_handle($url);
        self::$routes['get'][$url] = $action;
    }
    public static function post(string $url ,callable|array|string $action)
    {
        url_slash_handle($url);
        self::$routes['post'][$url] = $action;
    }


    public function resolve()
    {
        $method = $this->request->method();
        $url = $this->request->url();
        $data = $this->request->all();
        $action = self::$routes[ $method ][ $url ] ?? null;
        $this->errorHandler($url,$method);
        $this->actionHandle($action,$data);
    }

    private function errorHandler(string $requestURL,string $requestMethod)
    {
        $findRoute = false;
        $is405 = false;
        foreach(self::$routes AS $routeMethod => $routes){
            if(array_key_exists($requestURL,$routes)){
                $findRoute = true;
                if($routeMethod  != $requestMethod){
                    $is405 = true;
                }
            }
        }

        if(! $findRoute){
            abort(404);
        }

        if($is405){
            abort(405);
        }
    }

    private function actionHandle(callable|array|string|null $action ,array $data)
    {
        if(is_callable($action)){
            call_user_func_array($action,[$data]);
        }elseif(is_array($action)){
            call_user_func_array([new $action[0],$action[1]],[$data]);
        }elseif(is_string($action)){
            $action = explode('@',$action);
            call_user_func_array([new $action[0],$action[1]],[$data]);
        }else{
            return;
        }
    }

}

