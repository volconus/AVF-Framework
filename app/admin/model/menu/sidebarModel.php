<?php

class sidebarModel extends model {
    public function getSidebars($argv) {
        return $this->select('SELECT * FROM front.sidebar', []);
    }

    public function getSidebarById($argv) {
        return $this->selectOne('SELECT * FROM front.sidebar WHERE id = :id', [':id' => $argv['id']]);
    }

    public function getSidebarByName($argv) {
        return $this->selectOne('SELECT * FROM front.sidebar WHERE name = :name', [':name' => $argv['name']]);
    }

    public function getWidgetsBySidebarId($argv)
    {
        return $this->select('SELECT w.name, w.id FROM front.sidebar_widget_pivot p, front.widget w WHERE w.id = p.widget_id and p.sidebar_id = :id ORDER By order_priority asc', [':id' => $argv['id']]);
    }

    public function getAllWidgets()
    {
        return $this->select('SELECT w.* FROM front.widget w WHERE w.status = :status', [':status' => 'A']);
    }

    public function flushSidebarWidgets($argv = [])
    {
        return $this->update('DELETE FROM front.sidebar_widget_pivot WHERE sidebar_id = :sidebar_id', [':sidebar_id' => $argv['sidebarId']]);
    }

    public function assignWidgetToSidebar($argv)
    {
        return $this->insert('front.sidebar_widget_pivot', $argv);
    }

    public function saveSidebar($argv)
    {
        return $this->update('UPDATE front.sidebar SET sidebar_json = :json WHERE id = :id',
            [
                ':id' => $argv['id'],
                ':json' => $argv['json'],
            ]);
    }

}