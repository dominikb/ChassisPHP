<?php

namespace Lib\Framework\Http;

use Lib\Framework\Http\MiddlewareQueue;
use Lib\Framework\Container;
use Lib\Framework\Session;

class Controller
{
    protected $middlewareQueue;
    protected $middleware;
    protected $request;
    protected $view;

    // inject the Request
    public function setRequest($request)
    {
        $this->request = $request;
    }
    
    // inject the MiddlewareQueue
    public function setMiddlewareQueue($middlewareQueue)
    {
        $this->middlewareQueue = $middlewareQueue;
    }
    
    // inject Twig
    public function setView($view)
    {
        $this->view = $view;
    }
}
