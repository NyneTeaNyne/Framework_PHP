<?php
namespace App\Framework;

class Router{
    private $routes;
    private $routesS = [];
    private $routesD = [];
    private $class;
    private $method;
    private $parameters = [];

    public function __construct(){
        $this->routes = require(BASE_DIR . '/routes.php');
    }

    public function exec(){
        try {
            $this->prepare();
            call_user_func([new $this->class, $this->method], $this->parameters);
        } catch (\Exception $e){
            $params = array($e->getMessage());
            call_user_func_array([new $this->class, $this->method], $params);
            die;
        }
    }

    private function prepare(){
        foreach($this->routes as $key => $val){
            if(strpos($key, '{') != 0 && strpos($key, '}') != 0){
                $this->routesD[$key] = $val;
            } else {
                $this->routesS[$key] = $val;
            }
        }

        if(isset($this->routesS[$_SERVER["REQUEST_URI"]])) {
            $this->prepareStatique();
        } else {
            $this->prepareDynamique();
        }
    }

    private function prepareStatique(){
        $route = $this->routes[$_SERVER["REQUEST_URI"]];
        $this->class = array_shift($route);
        $this->method = array_shift($route);
    }

    private function prepareDynamique(){
        $uri = explode('/', $_SERVER["REQUEST_URI"]);
        foreach ($this->routesD as $key => $val) {
            $dyn = explode( '/', $key);
            if(count($uri) == count($dyn)) {
                foreach ($uri as $i => $v) {
                    if (isset($dyn[$i])) {
                        if (strcasecmp($v, $dyn[$i]) != 0) {
                            if (strpos($dyn[$i], '{') != 0 && strpos($dyn[$i], '}') != 0) {
                                $this->parameters = [];
                                break;
                            } else {
                                $param = str_replace('}', '', str_replace('{', '', $dyn[$i]));
                                $this->parameters[$param] = $v;
                                $route = $val;
                                $this->class = array_shift($route);
                                $this->method = array_shift($route);
                            }
                        }
                    } else {
                        $this->parameters = [];
                        break;
                    }
                }
            }
        }
        if(empty($this->parameters)){
            $this->error();
        }
    }

    private function error(){
        $this->class = 'App\Controller\Error';
        $this->method = 'error';
        throw new \Exception('Error Path');
    }
}