<?php

class menuModel extends model {
    public function getMenus($argv) {
        return $this->select('SELECT * FROM main.menu', []);
    }

    public function getMenuById($argv) {
        return $this->selectOne('SELECT * FROM main.menu WHERE id = :id', [':id' => $argv['id']]);
    }

    public function getMenuByName($argv) {
        return $this->selectOne('SELECT * FROM main.menu WHERE name = :name', [':name' => $argv['name']]);
    }

    public function saveMenu($argv)
    {
        return $this->update('UPDATE main.menu SET menu_json = :json WHERE id = :id',
            [
                ':id' => $argv['id'],
                ':json' => $argv['json'],
            ]);
    }

}