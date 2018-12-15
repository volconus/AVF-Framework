<?php
class language {
    use \libs\validate;
    private $view, $l;
    public function __construct()
    {
        $this->view = new \sys\view();
        $this->l = $GLOBALS['l'];
    }

    /**
     * AJAX
     * @return void
     */
    public function change($get) {
        # validation
        $this->get($get->argv1, $this->l->id, ['isNull', 'is09', 'min:1', 'max:3']);
        //$this->returnError();

        # get new language
        $lModel = new languageModel();
        $language = $lModel->getLanguageWithId([$get->argv1, 'A']);

        if (isset($language->file_name)) {
            # change session language
            $_SESSION['language'] = $language->file_name;
            if (isset($_SERVER['HTTP_REFERER']))
                header('location: '.$_SERVER['HTTP_REFERER']);
            else
                header('location: login');
        } else {
            die($this->l->somethingWrong . ' Language change #1');
        };


    }
}