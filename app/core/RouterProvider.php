<?php

class Router {

    protected $routes = [];

    public function define($routes){
        $this->routes = $routes;
    }

    public function direct($uri){
        if(array_key_exists($uri, $this->routes)){
            return 'app/'.$this->routes[$uri];
        }

        throw new Exception('ERROR 404. No route defined for this URI.');
    }
}