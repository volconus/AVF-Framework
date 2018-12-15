<?php

class model {
    public static $sql;

    public function connect($connectionName)
    {
        if (!isset($GLOBALS["db_$connectionName"])) { // önceden bağlanılmadıysa bağlan
            $db = \sys\core::$config['db'][$connectionName];
            try {
                $GLOBALS["db_$connectionName"] = new PDO($db['dsn'], $db['username'], $db['password'],
                    array(
                        PDO::ATTR_TIMEOUT => 5,
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    ));
                // echo "<h1>CONNECTED: $connectionName</h1>";

            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
    }

    public function dbError($errorText)
    {
        echo debug_backtrace()[1]['function'] . '.' . debug_backtrace()[1]['class'] . ' ' . $errorText;
    }

    public function checkConnection($connectionName) {
        if (!isset($GLOBALS["db_$connectionName"])) { // connect
            $this->connect($connectionName);
        }
        return $GLOBALS["db_$connectionName"];
    }

    public function getErrorMessage($errCode)
    {
        $errCodes = [
            23505 => 'Duplicated Entry.',
        ];
        return $errCodes[$errCode];
    }

    public function  findAll($value)
    {
        $i =1;
        $data = new stdClass();
        $data->$i = new stdClass();
        $data->$i->id = 1;
        $i=2;
        $data->$i = new stdClass();
        $data->$i->id = 2;
        return $data;
    }

    public function find($value)
    {
        $this->id = 123;
        $this->obje_id = 789;
        $this->name = 'Volkan';
    }

    public function remove()
    {
        self::$sql .= "DELETE FROM {$this->table} WHERE id = '{$this->id}'";
    }


    public function save()
    {
        self::$sql .= "INSERT INTO {$this->table} ";
        $fields = null;
        $values = null;
        $datas = [];

        foreach ($this as $name => $value):
            if ($name != 'table'):
                $fields .= "$name, ";
                $values .= "?, ";
                $datas[] = $value;
            endif;
        endforeach;
        $fields = rtrim($fields, ', ');
        $values = rtrim($values, ', ');
        self::$sql .= "($fields) VALUES ($values);".$datas[0];
        return $this;
    }

    public function update()
    {
        self::$sql .= "UPDATE {$this->table} SET ";
        $fields = null;
        $datas = [];
        foreach ($this as $name => $value):
            if ($name != 'table'):
                $fields .= "$name = ?, ";
                $datas[] = $value;
            endif;
        endforeach;
        $fields = rtrim($fields, ', ');
        self::$sql .= "$fields WHERE id = '{$this->id}'";
        print_r($datas);
        return $this;
    }

    public function limit()
    {
        return $this;
    }

    public function order()
    {

    }

    public function where()
    {

    }

    public function flush()
    {
        $this->query(self::$sql);
    }

    public function query($sql)
    {
        echo $sql;
    }
}
?>