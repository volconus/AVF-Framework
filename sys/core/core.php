<?php

/*
|---------------------------------------------------------------|
| Php Custom Framework v4.2.0                                   |
|---------------------------------------------------------------|
| /sys/core.class.php                                          |
|---------------------------------------------------------------|
| framework core class ..                                      |
|---------------------------------------------------------------|
| @date 07.01.2017                                              |
|---------------------------------------------------------------|
*/

namespace sys;

class core
{
    public static $config;
    public static $debugLog = [];
    public static $classRoute = [
        'router' => 'sys/core',
        'view' => 'sys/core',
        'model' => 'sys/core',
        'Smarty' => 'sys',
        'validate' => 'libs',
        'cleaner' => 'libs',
        'swarm' => 'libs',
    ];

    // CLass route'ları için APP'yi tara.

    private function scanDir($dir)
    {
        $currentFolder = __DIR__ . '/../../app' . $dir;
        $d = dir($currentFolder);
        while (false !== ($e = $d->read())) {
            if ($e != '.' && $e != '..') {
                if (is_dir($currentFolder . $e)) {
                    $this->scanDir($dir . $e . '/');
                } else {
                    $e = str_replace('.php', '', $e);
                    self::$classRoute[$e] = 'app' . $dir;
                }
            }
        }
    }

    #######################
    ### CONFIG METHODS ####
    #######################

    // Sub config İle ana config class route'ları birleştirir

    public function configMerge($array = array())
    {
        foreach ($array as $key => $value)
            self::$classRoute[$key] = $value;
    }

    // Ana ve Sub config dosyalarını bulur ve yükler

    public function readConfig($app)
    {
        if (file_exists(__DIR__ . '/../../app/' . $app . '/config.php')) {
            require_once(__DIR__ . '/../../app/' . $app . '/config.php');
            $subConfig = $config;
            $this->log('APP Config dosyası yüklendi.', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']));
        } else {
            $this->log('APP Config dosyası bulunamadı. APP ana configden çalışacak.', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']), 'orange');
        }

        if (file_exists(__DIR__ . '/../../config.php')) {
            require_once(__DIR__ . '/../../config.php');
            $defaultConfig = $config;
            $this->log('Main Config yüklendi.', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']));
        } else {
            $this->log('Main Config bulunamadı. ', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']), 'red');
        }


        if (!isset($subConfig) and !isset($defaultConfig)) {
            $this->log('Herhangi bir Config bulunamadı. Lütfen anadizin ve app_anadizin konumlarını kontrol edin.', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']), 'red');
        } else if (is_array($defaultConfig) && isset($subConfig) && is_array($subConfig)) {
            self::$config = array_merge($defaultConfig, $subConfig);
            $this->log('APP Config ve Main Config birleştirildi', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']), 'red');
        } else if (isset($subConfig) && is_array($subConfig)) {
            self::$config = $subConfig;
        } else if (is_array($defaultConfig)) {
            self::$config = $defaultConfig;
        }

        // Config'lerden gelen class route'lar class route değişkeninde birleştirilir..
        self::configMerge(self::$config['classRoute']);
    }

    // Okunan config parametreleri işleme konulur ..

    public function loadConfig()
    {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
    }

    // config'de lang tanımlanmışsa ilgili lang dosyasını çeker. session @param:lang varsa önce oraya bakar.

    protected function loadLang($app)
    {
        /*
         * 2 admin/controller/
         * 3 admin/controller/customFolder/
         */
        if (isset(self::$config['language']) && self::$config['language'] != '')
        {
            $this->log('Dil destegi aktif. Dil dosyasi araniyor... -> '.$app, __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']));
            self::$config['language'] = (isset($_SESSION['language']) ? $_SESSION['language'] : self::$config['language']);
            if (file_exists(__DIR__ . '/../../app/' . $app . '/language/' . self::$config['language'] . '.php'))
            {
                require_once(__DIR__ . '/../../app/' . $app .'/language/' . self::$config['language'] . '.php');
                if (!isset($_SESSION['language']))
                    $_SESSION['language'] = self::$config['language'];
                $this->log('Dil dosyasi yuklendi: '.self::$config['language'], __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']));
                $GLOBALS['l'] = $l;
            }
        }

    }

    ####################
    ### LOAD METHODS ###
    ####################

    // İstenilen method var mı ?

    protected function methodExist($class, $method)
    {
        if (method_exists($class, $method)) {
            $this->log($method . ' bulundu ve çalıştırıldı.', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']));
            return;
        }

        $this->log(__METHOD__ . ':' . __LINE__ . ' ' . $method . ' bulunamadı.', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']));
        die();

    }


    // İstenilen controller var mı ?

    protected function controllerExist($file)
    {
        if (file_exists($file)) {
            include_once($file);
            $this->log($file . ' başarı ile yüklendi', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']));
        } else {
            $this->log(__METHOD__ . ':' . __LINE__ . ' ' . $file . ' adresinde belirtilen dosya yok.', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']), 'red');
            die();
        }
    }


    // Dizin ve method bilgileri verilir ilgili class load edilir. Class Route  burda oluşur. Class ile birlikte ilgili config dosyasıda yüklenir ve çalıtırılır.

    public function load($app, $controllerPath, $controller, $method, $routeParam = null)
    {
        $this->scanDir('/');
        $this->readConfig($app);
        $this->loadConfig();
        $this->loadLang($app);
        $this->controllerExist(__DIR__ . '/../../app/' . $app . '/' . $controllerPath . '/' . $controller . '.php');
        $c = new $controller();
        $this->methodExist($c, $method);
        $i = -1;

        $_GET['argv'] = new \stdClass();
        foreach ($routeParam[0] as $value) {
            $i++;
            $sub = "argv$i";
            if ($i != 0)
                $_GET['argv']->$sub = $value;
        }
        $c->$method($_GET['argv']);
    }


    // Class Route oluşturulmuş olan dizinleri gezerek new edilen class'ı include eder.

    public static function autoload($class)
    {
        $class = @end(explode('\\', $class));

        if (!isset(self::$classRoute[$class])) {
            self::log($class . ' Class Route\'da bulunmadığı için çalıştırılmadı. ', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']), 'orange');
        } else if (file_exists(__DIR__ . '/../../' . self::$classRoute[$class] . '/' . $class . '.php')) {
            include_once(__DIR__ . '/../../' . self::$classRoute[$class] . '/' . $class . '.php');
            self::log(__DIR__ . '/../../' . self::$classRoute[$class] . '/' . $class . '.php bulundu ve yüklendi.', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']));
        } else {
            self::log(__DIR__ . '/../../' . self::$classRoute[$class] . '/' . $class . '.php bulunamadı', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']), 'red');
        }

    }


    ###################
    ### LOG METHODS ###
    ###################

    // Log geçmişi @param self::$debugLog'a atılarak saklanır.

    public static function log($text, $method = 'bilinmiyor', $line = 'bilinmiyor', $time = 0, $color = 'grey')
    {
        self::$debugLog['text'][] = $text;
        self::$debugLog['method'][] = $method;
        self::$debugLog['line'][] = $line;
        self::$debugLog['time'][] = $time;
        self::$debugLog['color'][] = $color;
    }

    // Log konsolu çalıştırılır ve ekranda panel çıkar.

    public static function logConsole()
    {
        if ((self::$config['debug'] == true || !isset(self::$config['debug'])) && strtolower($_SERVER['REQUEST_METHOD']) != 'post') {
            $view = new \sys\view();
            $view->dir(__DIR__ . '/../../');
            $setData = ['data' => self::$debugLog];
            $view->set($setData);
            $view->view('debug');
        }
    }

}

?>