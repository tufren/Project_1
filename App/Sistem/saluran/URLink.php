<?php

class URLink
{
    protected $router = 'Beranda';
    protected $method = 'index';
    protected $count = [];

    public function __construct()
    {
        $url = $this->parseURL();

        if ($url == NULL) {
            $url = [$this->router];
        }
        if (file_exists('../Sistem/kerangka/' . $url[0] . '.php')) {
            $this->router = $url[0];
            unset($url[0]);
        }

        include '../Sistem/kerangka/' . $this->router . '.php';
        $this->router = new $this->router;

        if (isset($url[1])) {
            if (method_exists($this->router, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        if (!empty($url)) {
            $this->count = array_values($url);
        }

        call_user_func_array([$this->router, $this->method], $this->count);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
