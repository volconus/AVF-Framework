<?php

class loginModel extends model {

    public function addAdmin($argv) {
        return $this->insert('master', '"user".list', $argv);
    }

    /**
     * @param $argv
     * [username]
     * [password]
     * @return mixed
     */
    public function getAuthWithUsername($argv) {
        return $this->selectOne('SELECT * FROM "admin".list WHERE username = :1 and password = :2 and status = :3', $argv);
    }

    /**
     * @param $argv
     * [email]
     * [password]
     * @return mixed
     */
    public function getAuthWithEmail($argv) {
        return $this->selectOne('SELECT * FROM "admin".list WHERE email = :1 and password = :2 and status = :3', $argv);
    }

    /**
     * @param $argv
     * [id]
     * [password]
     * @return mixed
     */
    public function getAuthWithId($argv) {
        return $this->selectOne('SELECT * FROM "admin".list WHERE id = :1 and password = :2 and status = :3', $argv);
    }
}