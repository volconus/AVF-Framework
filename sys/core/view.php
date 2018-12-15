<?php

    namespace sys;

    class view extends \Smarty
    {

        function __construct ()
        {

            $this->setCacheDir(__DIR__ . '/../_cache');
            $this->setCompileDir(__DIR__ . '/../_compiler');
            $this->setTemplateDir(__DIR__ . '/../../app/');

            parent::__construct();
        }

        public function set($assign = [])
        {
            $this->assign($assign);
            return $this;
        }

        public function view($tplName, $lifeTime = 0)
        {
            //$this->setCaching(parent::CACHING_LIFETIME_SAVED);
            $this->caching = 1;
            $this->assign(['l' => @$GLOBALS['l']]);
            $this->cache_lifetime = $lifeTime;
            $this->display($tplName.'.tpl');
            return $this;
        }

        public function dir($path)
        {
            $this->setTemplateDir($path);
        }

        public function isCache($lifeTime, $template = null, $cache_id = null, $compile_id = null, $parent = null){
            return $this->isCached($template.'.tpl', $cache_id, $compile_id, $parent);
        }

        public function setCache($lifeTime){
            $this->cache_lifetime = $lifeTime;
            return $this->setCaching(parent::CACHING_LIFETIME_CURRENT);
        }

    }