<?php

class regionModel extends model {
    public function getConstruct($tableName) {
        return $this->select(
            "SELECT *
FROM information_schema.columns
WHERE table_schema = 'sport'
  AND table_name   = ?",
            [
                $tableName
            ]
        );
    }
}