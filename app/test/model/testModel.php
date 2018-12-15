<?php


class testModel extends model
{
    public $table = 'test';

    public $id;
    public $name;
    public $obje_id;
    public $static;


    public  function longQuery()
    {
        $this->runQuery("SELECT * FROM ANASININAMI");
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->{$name};
    }

}