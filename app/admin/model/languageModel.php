<?php

class languageModel extends model {
    /**
     * @param $argv
     * [id]
     * @return mixed
     */
    public function getLanguageWithId($argv) {
        return $this->selectOne('SELECT * FROM "admin".language WHERE id = :1 and status = :2', $argv);
    }

}