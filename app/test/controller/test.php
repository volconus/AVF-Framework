<?php
class test {
    private $view;
    public function __construct() {
        $this->view = new \sys\view();
    }

    /**
     *
     */
    public function index() {

        /* INSERT */
        /*
        $test = new userModel();
        $test->user_id = 99999;
        $test->save();
        $test->flush();
        die;*/
        /* INSERT */


        /* SELECT ONE */
        echo PHP_EOL.PHP_EOL;
        $model = new testModel();
        $model->find(1);
        //$model->remove();
        $model->obje_id = 5;
        $model->static = 'bu bir static';
        $model->update()->flush();
        /* SELECT ONE */

        /* SELECT ALL */
        /*
        echo PHP_EOL.PHP_EOL;
        $model = new testModel();
        foreach ($model->findAll(1) as $data):
            print_r($data);
        endforeach;
        */
        /* SELECT ALL */
    }
}