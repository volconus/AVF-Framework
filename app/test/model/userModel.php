<?php


class userModel extends model
{
    protected $table = 'user';

    public $user_id;


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