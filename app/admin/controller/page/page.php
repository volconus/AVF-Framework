<?php
class page {
    private $view, $layout;
    public function __construct() {
        (new helpers())->isRestrictedArea();
    }

    public function index() {
        $this->view = new \sys\view();
        $this->layout = new layout(['headTitle' => 'Pages']);
        $model = new pageModel();
        $this->view->set(['pages' => $model->getPages([])]);
        $this->view->view('admin/view/page/index');
    }

    public function edit($get) {
        $this->view = new \sys\view();
        $this->layout = new layout(['headTitle' => 'Pages']);

        $availObjects = new stdClass();
        $model = new pageModel();
        $this->view->set(['page' =>  $model->getPageById(['id' => $get->argv1])]);
        $this->view->set(['assignedModules' => $model->getModulesByPageId(['id' => $get->argv1])]);
        $this->view->set(['availableModules' => $model->getAllModules()]);
        $this->view->view('admin/view/page/edit');
    }

    public function editSave()
    {
        $model = new pageModel();
        // clear all modules on page.
        $result = $model->flushPageModules(['pageId' => $_POST['pageId']]);
        $order = 0;
        foreach (json_decode($_POST['usedModulesJson']) as $json) {
            if (isset($json->id)) {
                $order++;
                $model->assignModuleToPage([
                    'page_id' => $_POST['pageId'],
                    'module_id' => $json->id,
                    'order_priority' => $order,
                ]);
            }
        }

        if ($result == true)
            echo json_encode(['msg' => 'OK']);
        else
            echo json_encode(['msg' => 'DBERROR']);
    }

}