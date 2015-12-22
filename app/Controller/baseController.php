<?php

namespace app\Controller;

use Symfony\Component\HttpFoundation\Request;

abstract class baseController {

    private $view;
    private $conn;
    protected $app;

    public function __construct(\Pimple $container, $request) {
        $this->view = $container['twig'];
        $this->conn = $container['db'];
        $this->app = $container;
        $this->request = $request;
    }

    protected function fetchAll($query) {
        return $this->conn->fetchAll($query);
    }

    protected function render($tpl) {
        return $this->view->render($tpl, array(
                    'error' => $this->app['security.last_error']($this->request),
                    'last_username' => $this->app['session']->get('_security.last_username'),
        ));
    }

}
