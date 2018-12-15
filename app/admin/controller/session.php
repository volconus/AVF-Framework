<?php
class session {
    use \libs\validate;
    private $view, $l;
    public function __construct()
    {
        $this->view = new \sys\view();
        $this->l = $GLOBALS['l'];
    }

    /**
     * NOT-AJAX
     * @return void
     */
    public function form() {
        $hModel = new helpersModel();
        $loginMethod = $hModel->getSetting('loginMethod')->value;
        $this->view->set(['languages' => $hModel->getLanguages()]);
        $this->view->set(['loginMethod' => $loginMethod])->view('admin/view/session/login-form');
    }

    /**
     * AJAX
     * @return void
     */
    public function auth() {
        # validation
        sleep(1);
       /* $this->post('param', $this->l->username, ['isNull', 'min:1', 'max:150']);
        $this->post('password', $this->l->password, ['isNull', 'isText', 'min:2', 'max:40']);
        $this->post('language', $this->l->language, ['isNull', 'isText', 'min:3', 'max:20']);
        $this->returnErrorJson();*/

        # get login settings
        $hModel = new helpersModel();
        $md5Count = $hModel->getSetting('md5Count')->value;
        $loginMethod = $hModel->getSetting('loginMethod')->value;

        # md5
        $h = new helpers();
        $_POST['password'] = $h->mdFive($_POST['password'], $md5Count);

        # authentication on db
        $lModel = new loginModel();
        if ($loginMethod == 'both' and $this->isMail($_POST['param'], $this->l->email)) { // Login Method: BOTH - auth with email
            $user = $lModel->getAuthWithEmail([$_POST['param'], $_POST['password'], 'A']);
        } else if ($loginMethod == 'both' and $this->is09($_POST['param'], $this->l->id)) { // Login Method: BOTH - auth with user id
            $user = $lModel->getAuthWithId([$_POST['param'], $_POST['password'], 'A']);
        } else if ($loginMethod == 'both' and $this->isUsername($_POST['param'], $this->l->username)) { // Login Method: BOTH - auth with username
            $user = $lModel->getAuthWithUsername([$_POST['param'], $_POST['password'], 'A']);
        } else if ($loginMethod == 'id' and $this->is09($_POST['param'], $this->l->id)) { // Login Method: ID - auth with user id
            $user = $lModel->getAuthWithId([$_POST['param'], $_POST['password'], 'A']);
        } else if ($loginMethod == 'username' and $this->isUsername($_POST['param'], $this->l->username)) { // Login Method: USERNAME -auth with username
            $user = $lModel->getAuthWithUsername([$_POST['param'], $_POST['password'], 'A']);
        } else if ($loginMethod == 'both' and $this->isMail($_POST['param'], $this->l->email)) { // Login Method: EMAIL - auth with email
            $user = $lModel->getAuthWithEmail([$_POST['param'], $_POST['password'], 'A']);
        }

        # output json
        if (isset($user->id)) {
            $this->setSession($user);
            $output = ['msg' => 'OK', 'locationForward' => 'dashboard'];
        } else {
            $output = ['msg' => 'ERROR', 'error' => $this->l->authFailed];
        }

        # print output
        echo json_encode($output);
    }

    private function setSession($user) {
        $_SESSION['id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
        $_SESSION['name'] = $user->name;
        $_SESSION['surName'] = $user->sur_name;
        if (isset($_POST['language']))
            $_SESSION['language'] = $_POST['language'];
        return true;
    }

    public function out() {
        session_destroy();
        header('Location: login');
    }
}