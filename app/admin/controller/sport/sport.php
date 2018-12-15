<?php
class sport {
    private $view, $layout;
    public function __construct() {
        (new helpers())->isRestrictedArea();
        $this->view = new \sys\view();
        $this->layout = new layout(['headTitle' => 'Sports List']);
    }

    public function index() {
        $model = new regionModel();
        $table = $model->getConstruct('sport');
        $this->view->set(['table' => $table]);
        $this->view->view('admin/view/sport/index');
    }
}