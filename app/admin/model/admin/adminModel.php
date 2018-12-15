<?php
class adminModel extends model {
    public function getAccess($argv = []) {
        return $this->select(
            'SELECT alg.name as group_name, al.id as access_id, al.name as access_name FROM "admin".access_list al, "admin".access_list_group alg WHERE al.group_id = alg.id GROUP By alg.name, al.id, al.name ORDER By alg.name'
        );
    }
}