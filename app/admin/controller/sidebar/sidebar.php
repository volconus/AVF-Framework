<?php
class sidebar {
    private $view, $layout;
    public function __construct() {
        (new helpers())->isRestrictedArea();
    }

    public function index() {
        $this->view = new \sys\view();
        $this->layout = new layout(['headTitle' => 'Sidebars']);
        $model = new sidebarModel();
        $this->view->set(['sidebars' => $model->getSidebars([])]);
        $this->view->view('admin/view/sidebar/index');
    }

    public function edit($get) {
        $this->view = new \sys\view();
        $this->layout = new layout(['headTitle' => 'Sidebars']);

        $availObjects = new stdClass();
        $model = new sidebarModel();
        $this->view->set(['sidebar' =>  $model->getSidebarById(['id' => $get->argv1])]);
        $this->view->set(['assignedWidgets' => $model->getWidgetsBySidebarId(['id' => $get->argv1])]);
        $this->view->set(['availableWidgets' => $model->getAllWidgets()]);
        $this->view->view('admin/view/sidebar/edit');
    }

    public function editSave()
    {
        $model = new sidebarModel();
        // clear all widgets on sidebar.
        $result = $model->flushSidebarWidgets(['sidebarId' => $_POST['sidebarId']]);
        $order = 0;
        foreach (json_decode($_POST['usedWidgetsJson']) as $json) {
            $order++;
            $model->assignWidgetToSidebar([
                'sidebar_id' => $_POST['sidebarId'],
                'widget_id' => $json->id,
                'order_priority' => $order,
            ]);
        }

        if ($result == true)
            echo json_encode(['msg' => 'OK']);
        else
            echo json_encode(['msg' => 'DBERROR']);
    }

}