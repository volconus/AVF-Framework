<?php
class group {
    private $view, $layout;
    public function __construct() {
        (new helpers())->isRestrictedArea();
        $this->view = new \sys\view();
        $this->layout = new layout(['headTitle' => 'Administrator Lists']);
    }

    public function edit() {
        $model = new adminModel();
        $availAccesses = $model->getAccess();
        $this->view->set(['availAccesses' => $availAccesses]);
        $this->view->view('admin/view/admin/index');
    }
}