<?Php

namespace libs;


trait validate
{
    public $error = [];

    public $validate = [
        'numeric'           => 'FILTER_VALIDATE_INT',
        'mail'              => 'FILTER_VALIDATE_EMAIL',
        'ip'                => 'FILTER_VALIDATE_IP',
    ];

    # Hata yazdırma ekranı tasarlanmadığı için geçici olarak kullanımaktadır.
    public function returnError ($error = '')
    {
        if ($error != '')
            $this->error[0] = $error;

        if(isset($this->error[0]))
        {
            echo "<script>alert('".$this->error[0]."')</script>";
            die();
        }
    }

    # Hata yazdırma ekranı tasarlanmadığı için geçici olarak kullanımaktadır.
    public function returnErrorJson($error = [])
    {
        if (isset($error[0]))
            $this->error[0] = $error[0];

        if(isset($this->error[0]))
        {
            echo json_encode(['msg' => 'ERROR', 'error' => $this->error[0]]);
            die();
        }
    }

    public function validate($value, $validate)
    {

        if(filter_var($value, $this->validate[$validate]) === true)
        {
            return true;
        }

        return false;
    }

    public function post($post, $text, $validate = [])
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            foreach ($validate  as $item)
            {
                $_POST[$post] = trim($_POST[$post]);

                if(strpos($item, ':'))
                {
                    $item = explode(':', $item);
                    $result = $this->$item[0]($_POST[$post], $item[1], $text);
                }
                else
                {
                    $result = $this->$item($_POST[$post],$text);
                }

                if(!$result) break;
            }
        }else {
            $this->error[] = $text .' '. $GLOBALS['l']->isNotNull;
            return false;
        }
    }

    public function get($post, $text, $validate = [])
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET' and isset($_GET[$post]))
        {
            foreach ($validate  as $item)
            {
                $_GET[$post] = trim($_GET[$post]);

                if(strpos($item, ':'))
                {
                    $item = explode(':', $item);
                    $this->$item[0]($_GET[$post], $item[1], $text);
                }
                else
                {
                    $this->$item($_GET[$post],$text);
                }
            }
        } else {
            $this->error[] = $text .' '. $GLOBALS['l']->isNotNull;
            return false;
        }
    }

    public function isNull($value = '', $text)
    {
        if($value == '') {
            $this->error[] = $text .' '. $GLOBALS['l']->isNotNull;
            return false;
        }

        return true;
    }

    public function isMail($value, $text)
    {
        if($value != '')
        {
            if(!filter_var($value, FILTER_VALIDATE_EMAIL) === false)
            {
                return true;
            }

            $this->error[] = $text .' '. $GLOBALS['l']->isNotEmail;
            return false;
        }

        return true;
    }

    public function min($value, $min, $text)
    {
        if($value != '')
        {
            if(strlen($value) < $min){
                $this->error[] = $text . ', ' . $min . ' ' . $GLOBALS['l']->isNotMinimum;
                return false;
            }
            return true;
        }
    }

    public function max($value, $max, $text)
    {
        if($value != '') {
            if (strlen($value) > $max) {
                $this->error[] = $text . ', ' . $max . ' ' . $GLOBALS['l']->isNotMaximum;
                return false;
            }
            return true;
        }
    }

    public function isAZ($value, $text)
    {
        if($value != '')
        {
            if (preg_match('/^[a-zA-züÜğĞıİşŞçÇöÖ]+$/', $value)) {
                return true;
            }

            $this->error[] = $text .' '. $GLOBALS['l']->isNotAZ;
            return false;
        }
    }

    public function is09($value, $text)
    {
        if($value != '')
        {
            if (preg_match('/^[0-9]+$/', $value)) {
                return true;
            }

            $this->error[] = $text .' '. $GLOBALS['l']->isNot09;
            return false;
        }
    }

    public function isAz09($value, $text)
    {
        if($value != '')
        {
            if (preg_match('/^[a-zA-züÜğĞıİşŞçÇöÖ0-9]+$/', $value)){
                return true;
            }

            $this->error[] = $text .' '. $GLOBALS['l']->isNotAz09;
            return false;
        }
    }

    public function isUsername($value, $text)
    {
        if($value != '')
        {
            if(preg_match('/^[a-zA-Z]{2,50}[0-9]{0,5}\.[a-zA-Z]{2,50}[0-9]{0,5}+$/', $value))
            {
                return true;
            }

            $this->error[] = $text .' '. $GLOBALS['l']->isNotUsername;
            return false;
        }
    }


    public function isText($value, $text)
    {
        if($value != '')
        {
            if(preg_match('/^[a-zA-Z0-9ğĞüÜşŞİıÖöÇç+:\s.\/\(\)]+$/', $value))
            {
                return true;
            }

            $this->error[] = $text .' '. $GLOBALS['l']->isNotText;
            return false;

        }
    }

    function isDate($date, $text)
    {

        if($date != '')
        {
            $format = 'Y-m-d';
            $d = \DateTime::createFromFormat($format, $date);
            if($d && $d->format($format) == $date){
                return true;
            }

            $this->error[] = $text .' '. $GLOBALS['l']->isNotDate;
            return false;

        }
    }

    function isDateTime($date, $text)
    {

        if($date != '')
        {
            $format = 'Y-m-d H:i:s';
            $d = \DateTime::createFromFormat($format, $date);
            if($d && $d->format($format) == $date){
                return true;
            }

            $this->error[] = $text .' '. $GLOBALS['l']->isNotDateTime;
            return false;
        }
    }



}