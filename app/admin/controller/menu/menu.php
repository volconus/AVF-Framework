<?php
class menu {
    private $view, $layout;
    public function __construct() {
        (new helpers())->isRestrictedArea();
    }
    
    public function index() {
        $this->view = new \sys\view();
        $this->layout = new layout(['headTitle' => 'Menus']);
        $model = new menuModel();
        $this->view->set(['menus' => $model->getMenus([])]);
        $this->view->view('admin/view/menu/index');
    }

    public function edit($get) {
        $this->view = new \sys\view();
        $this->layout = new layout(['headTitle' => 'Menus']);

        $availObjects = new stdClass();
        $model = new menuModel();
        $menu = $model->getMenuByName(['name' => $get->argv1]);
        $jsons = json_decode($menu->menu_json);

        # get sports
        $model = new objectModel();
        $sports = $model->getSports([]);

        $this->view->set(['sports' => $sports]);
        $this->view->set(['jsons' => $jsons]);
        $this->view->set(['menu' => $menu]);
        $this->view->set(['availObjects' => $availObjects])->view('admin/view/menu/edit');
    }

    public function editSave()
    {
        $model = new menuModel();
        $result = $model->saveMenu([
            'id' => $_POST['menuId'],
            'json' => $_POST['usedObjectsJson']
        ]);
        if ($result == true)
            echo json_encode(['msg' => 'OK']);
        else
            echo json_encode(['msg' => 'DBERROR']);
    }

    public function getRegions($get)
    {
        $filter = [];
        $model = new objectModel();

        if (isset($get->argv1)) {
            $filter['remote_sport_id'] = $get->argv1;
            $regions = $model->getRegionsBySportId($filter);
        } else {
            $regions = $model->getRegions($filter);
        }
        echo json_encode($regions);
    }

    public function getSports($get)
    {
        $model = new objectModel();
        $sports = $model->getSports([]);
        echo json_encode($sports);
    }

    public function getCompetitions($get)
    {
        $filter = [];
        $model = new objectModel();

        if (isset($get->argv1)) {
            $filter['remote_region_id'] = $get->argv1;
            $competitions = $model->getCompetitionsByRegionId($filter);
        } else {
            $competitions = $model->getCompetitions($filter);
        }
        echo json_encode($competitions);
    }
}