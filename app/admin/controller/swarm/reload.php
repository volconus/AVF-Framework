<?php
class reload {
    private $view;
    public function __construct() {
        $this->view = new \sys\view();
    }
    
    public function reload() {
        $this->view->view('admin/view/swarm/reload');
    }
}