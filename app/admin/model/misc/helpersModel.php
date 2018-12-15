<?php
class helpersModel extends model {
    public function getSetting($name)
    {
        return $this->selectOne(
            "SELECT value FROM admin.setting WHERE name = :1",
            [
                $name
            ]
        );
    }

    public function getLanguages()
    {
        return $this->select(
            "SELECT * FROM admin.language WHERE status = :1",
            ['A']
        );
    }

    public function getModules()
    {
        return $this->select(
            "SELECT * FROM admin.module"
        );
    }
}