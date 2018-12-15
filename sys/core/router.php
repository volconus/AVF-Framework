<?php

    /*
    |---------------------------------------------------------------|
    | Php Custom Framework v4.1.1                                   |
    |---------------------------------------------------------------|
    | /sys/route.class.php                                          |
    |---------------------------------------------------------------|
    | framework route class ..                                      |
    |---------------------------------------------------------------|
    | @date 01.12.2016                                              |
    |---------------------------------------------------------------|
    */


    namespace sys;

    use \sys\core as core;

    class router {

        public static $uri = null;
        public static $directory = null;
        public static $controller = null;
        public static $method = null;
        public static $routeMap = [];

        protected static $regexMap = [
            '{Az}' => '([a-zA-ZışğüçöĞÜŞİÖÇ]+)',
            '{09}' => '([0-9]+)',
            '{Az09}' => '([a-zA-Z0-9_\-]+)',
            '{*}'  => '(.*)'
        ];


        public static function get($argv)
        {
            $pattern = ($argv['route'] == '' ? 'AVFhomePage' : $argv['route']);

            if(strtolower($_SERVER['REQUEST_METHOD']) == 'get')
            {
                if (!isset($argv['controllerPath']))
                    $argv['controllerPath'] = 'controller';
                else
                    $argv['controllerPath'] = 'controller/'.$argv['controllerPath'];

                foreach (self::$regexMap as $old => $new)
                {
                    $pattern = str_replace($old, $new, $pattern);
                }

                self::$routeMap[$pattern] = [
                    'app' => $argv['app'],
                    'controllerPath' => $argv['controllerPath'],
                    'controller' => $argv['controller'],
                    'method' => $argv['method'],
                ];
                core::log('GET isteği yapıldı.', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']));
                return;
            }

           // core::log('İstek yapılan method GET değildi. Method : ' . $_SERVER['REQUEST_METHOD'], __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']), 'red');

        }

        public static function post($argv)
        {
            if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
            {
                if (!isset($argv['controllerPath']))
                    $argv['controllerPath'] = 'controller';
                else
                    $argv['controllerPath'] = 'controller/'.$argv['controllerPath'];

                $pattern = ($argv['route'] == '' ? 'AVFhomePage' : $argv['route']);

                foreach (self::$regexMap as $old => $new)
                {
                    $pattern = str_replace($old, $new, $pattern);
                }
                self::$routeMap[$pattern] = [
                    'app' => $argv['app'],
                    'controllerPath' => $argv['controllerPath'],
                    'controller' => $argv['controller'],
                    'method' => $argv['method'],
                ];
                core::log('POST isteği yapıldı.', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']));
                return;
            }

          //  core::log('İstek yapılan method POST değildi. Method : ' . $_SERVER['REQUEST_METHOD'], __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']), 'red');

        }

        public static function cli($argv)
        {
            $pattern = ($argv['route'] == '' ? 'AVFhomePage' : $argv['route']);

            if(strtolower($_SERVER['REQUEST_METHOD']) == 'cli')
            {
                if (!isset($argv['controllerPath']))
                    $argv['controllerPath'] = 'controller';
                else
                    $argv['controllerPath'] = 'controller/'.$argv['controllerPath'];

                foreach (self::$regexMap as $old => $new)
                {
                    $pattern = str_replace($old, $new, $pattern);
                }

                self::$routeMap[$pattern] = [
                    'app' => $argv['app'],
                    'controllerPath' => $argv['controllerPath'],
                    'controller' => $argv['controller'],
                    'method' => $argv['method'],
                ];
                core::log('GET isteği yapıldı.', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']));
                return;
            }

            // core::log('İstek yapılan method GET değildi. Method : ' . $_SERVER['REQUEST_METHOD'], __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']), 'red');

        }

        protected static function split($splitData)
        {
            $param = explode('@', $splitData);
            self::$method = $param[1];

            $param2  = explode('/', $param[0]);
            self::$controller = end($param2);

            array_pop($param2);
            $param3 = '';
            foreach($param2 as $item): $param3 .= $item.'/'; endforeach;
            $dir = rtrim($param3, '/');
            preg_match('/\//i', $dir, $matches);

            if (isset($matches[0]))
                self::$directory = str_replace('/', '/controller/', $dir);
            else
                self::$directory = $dir . '/controller/';

            //echo 'Dir:'.self::$directory.' - Controller:'. self::$controller .' - Method:'.self::$method;

        }



        public static function run()
        {
            if(!isset($_GET['uri']) or $_GET['uri'] == '')
            {
                $_GET['uri'] = 'AVFhomePage';
            }

            foreach (self::$routeMap as $pattern => $routeParams)
            {
                if (preg_match_all('/' . $pattern . '/', $_GET['uri'], $matchRoutes, PREG_SET_ORDER))
                {
                    $core = new core();
                    $core->load($routeParams['app'], $routeParams['controllerPath'], $routeParams['controller'], $routeParams['method'], $matchRoutes);
                    core::log('App : ' . $routeParams['app'] . 'ControllerPath : ' . $routeParams['controllerPath'] . ' Controller ' . $routeParams['controller'] . ' Method : ' . $routeParams['method'] . ' algılandı.', __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']), 'green');
                    break;
                }
                else
                {
                    core::log('Route map üzerinde bulunmayan adres tespit edildi veya uygunsuz karakter içeren parametre var. Uri : ' . $_GET['uri'], __METHOD__, __LINE__, (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']), 'red');
                }
            }

        }

        public static function getRouteList()
        {
            return "<pre>". htmlspecialchars(print_r(self::$routeMap, true)). "</pre>";
        }


    }