<?php

class layout
{
    private $view;

    public function __construct($headerArgs =[], $footerArgs = [])
    {
        $this->view = new \sys\view();
        $this->getHeader($headerArgs);
    }

    public function getHeader($headerArgs = [])
    {
        if (empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
            $this->view->set($headerArgs);
            $hModel = new helpersModel();
            $this->view->set(['config' => \sys\core::$config]);
            $this->view->set(['modules' => $hModel->getModules()]);
            $this->view->set(['languages' => $hModel->getLanguages()]);
            $this->view->view('admin/view/layout/header');
        }
    }

    public function getFooter($footerArgs = [])
    {
        if (empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
            $this->view->set($footerArgs);
            $this->view->view('admin/view/layout/footer');
        }
    }

    public function __destruct()
    {
        $this->getFooter();
    }
}