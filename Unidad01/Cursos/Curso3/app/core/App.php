<?php

class App
{

    protected $controller = 'home';

    protected $method = 'index';

    protected $params = [];

    public function __contruct()
    {
        $this->parseUrl();
    }

    public function parseUrl()
    {
        if ( isset($_GET['url']) )
        {
            return $url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITZE_URL );
        }
    }
}