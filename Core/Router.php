<?php
    /****
     * Router
     * PHP version 8.1
     */

    class Router{
        /***
         * Les routes de l'application (La table de routes)
         * 
         */
        protected $routes=[];

        /****
         * Ensemble des parametres de la route actuelle
         */
        protected $params= [];

        /***
         * fonction permettant d'ajouter une route a la table des routes
         */

        public function add($url, $params=[])
        {
            $route=preg_replace("~\/~", "\/", $url);

            $route=preg_replace("/\{([a-z-]+)\}/","(?'\\1'[a-z-]+)",$route);

            $route=preg_replace("/\{([a-z-]+):([^\}]+)\}/", "(?'\\1'\\2)", $route);

            $route= "/^" .$route. "\$/i";

            $this->routes[$route]=$params;
        }

        /****
         * Matcher une route
         */

         public function match($url){

            foreach ($this->routes as $route => $params) {
                if(preg_match($route, $url, $matches)){
                    echo "<pre>";
                    var_dump($matches);
                    foreach ($matches as $key => $match) {
                        if(is_string($key)){
                            $params[$key]=$match;
                        }
                    }
                    $this->params=$params;
                    return true;
                }
            }
            return false;
        }
        /***
         * Une fonction qui renvoie toutes les routes
         */
        public function getRoutes(){
            return $this->routes;
        }

        /***
         * Une fonction qui renvoie tous les parametres
         */

         public function getParams(){
            return $this->params;
         }

        public function toPascalCase($str){
            return preg_replace("/\s+/", "", ucwords(preg_replace("/-/", " ", $str)));
        }

        public function toCamelCase($str){
            echo lcfirst($this->toPascalCase($str));
            return lcfirst($this->toPascalCase($str));
        }

        public function dispatch($url){
            if($this->match($url)){
                $controller=$this->params["controller"];
                $controller=$this->toPascalCase($controller);

                if(class_exists($controller)){
                    $controller_object=new $controller();

                    $action = $this->toCamelCase($this->params["action"]);

                    if(method_exists($controller_object, $action)){
                        $controller_object->$action();
                    }else{
                        echo "Méthode \"$action\" inexistante dans le controller \"$controller\"";

                    }
                }else{
                    echo "Class \"$controller\" inexistante";
                }
            } else {
                echo $_SERVER["QUERY_STRING"];
            echo "Route inexistante pour la route \"$url\"";
            }
        }
    }
