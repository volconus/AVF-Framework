<?php
class region {
    private $view, $layout;
    public function __construct() {
        (new helpers())->isRestrictedArea();
        $this->view = new \sys\view();
        $this->layout = new layout(['headTitle' => 'Region List']);
    }

    public function index() {
        $model = new regionModel();
        $table = $model->getConstruct('region');
        $this->view->set(['table' => $table]);
        $this->view->view('admin/view/region/index');
    }
}