<?php
class dashboard {
    private $view, $layout;
    public function __construct() {
        (new helpers())->isRestrictedArea();
        $this->view = new \sys\view();
        $this->layout = new layout(['headTitle' => 'Admin Panel']);
    }
    
    public function index() {
        $this->view->view('admin/view/dashboard/index');
    }
}