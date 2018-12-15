<?php
class competition {
    private $view, $layout;
    public function __construct() {
        (new helpers())->isRestrictedArea();
        $this->view = new \sys\view();
        $this->layout = new layout(['headTitle' => 'Competitions List']);
    }

    public function index() {
        $model = new regionModel();
        $table = $model->getConstruct('competition');
        $this->view->set(['table' => $table]);
        $this->view->view('admin/view/competition/index');
    }
}