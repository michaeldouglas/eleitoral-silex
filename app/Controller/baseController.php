<?php

namespace app\Controller;

abstract class baseController {
    private $view;
    private $conn;
    
    public function __construct(\Pimple $container) {
        $this->view = $container['twig'];
        $this->conn = $container['db'];
    }
    
    protected function fetchAll($query)
    {
         return $this->conn->fetchAll($query);
    }
    
    protected function render($tpl)
    {
        return $this->view->render($tpl);
    }
}