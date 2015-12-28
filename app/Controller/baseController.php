<?php

namespace app\Controller;

abstract class baseController
{

    private $view;
    private $conn;
    protected $app;
    private $viewName;
    private $folder;

    public function __construct(\Pimple $container, $request)
    {
        $this->view = $container['twig'];
        $this->conn = $container['db'];
        $this->app = $container;
        $this->request = $request;
        $this->path = $this->getView();
    }

    protected function fetchAll($query)
    {
        return $this->conn->fetchAll($query);
    }
    
    protected function render($tpl, $folder = 'pages')
    {
        $this->setPathView($folder);
        
        return $this->view->render(
            $this->getFullPath($tpl),
            array(
                'error' => $this->app['security.last_error']($this->request),
                'last_username' => $this->app['session']->get('_security.last_username'),
            )
        );
    }
    
    public function setPathView($folder)
    {
        $this->viewName = $this->getPathView($folder);
    }
    
    protected function getFullPath($tpl, $extension = '.tpl')
    {
        return $this->viewName . $tpl . $extension;
    }
    
    public function getView()
    {
        $class = static::class;
        
        $this->viewName = strtolower(
            str_replace('Controller', '', end(explode('\\', $class)))
        );
        
        return $this;
    }
    
    public function getPathView($path)
    {
        $this->viewName = sprintf('%s/%s/', $path, $this->viewName);
        
        return $this->viewName;
    }
}
