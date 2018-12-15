<?php

class pageModel extends model {
    public function getPages($argv) {
        return $this->select('SELECT * FROM front.page', []);
    }

    public function getPageById($argv) {
        return $this->selectOne('SELECT * FROM front.page WHERE id = :id', [':id' => $argv['id']]);
    }

    public function getPageByName($argv) {
        return $this->selectOne('SELECT * FROM front.page WHERE name = :name', [':name' => $argv['name']]);
    }

    public function getModulesByPageId($argv)
    {
        return $this->select('SELECT m.name, m.id FROM front.page_module_pivot p, front.module m WHERE m.id = p.module_id and p.page_id = :id ORDER By p.order_priority asc', [':id' => $argv['id']]);
    }

    public function getAllModules()
    {
        return $this->select('SELECT m.* FROM front.module m WHERE m.status = :status', [':status' => 'A']);
    }

    public function flushPageModules($argv = [])
    {
        return $this->update('DELETE FROM front.page_module_pivot WHERE page_id = :page_id', [':page_id' => $argv['pageId']]);
    }

    public function assignModuleToPage($argv)
    {
        return $this->insert('front.page_module_pivot', $argv);
    }

}