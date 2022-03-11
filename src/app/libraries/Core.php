<?php

class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();
        //look in controllers for first value,
        //and ucwords will capitalise first letter
        if (isset($url[0]) && file_exists('../controllers/'. ucwords($url[0]) . '.php')) {
            //setting a new controller
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }
        //Require the controller
        require_once'../app/controllers/'.$this->currentController.'.php';
        $this->currentController= new $this->currentController;
        
        //checking for second part of URL i.e.-method
        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }
        //Getting parameters
        $this->params = $url ? array_values($url) : [];

        // Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            //allow to filter variables
            $url= filter_var($url, FILTER_SANITIZE_URL);
            
            $url = explode('/', $url);
            return $url;
        }
    }
}
