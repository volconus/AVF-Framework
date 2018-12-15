<?php
class helpers {
    /**
     * @param $string = md5lenecek string
     * @param $count = Kac kere md5lenecegi
     * @return string
     */
    public function mdFive($string, $count = 1)
    {
        for ($i=1; $i<=$count; $i++) {
            $string = md5($string);
        }
        return $string;
    }

    public function isRestrictedArea() {
        if (!isset($_SESSION['id']) || !is_numeric($_SESSION['id'])) {
            if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
                echo json_encode(array("location" => \sys\core::$config['uri'].'login'));
            else
                header('location: '.\sys\core::$config['uri'].'login');

            die();
        }
    }
}