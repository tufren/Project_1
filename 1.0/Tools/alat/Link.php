<?php 

class Link {
	protected $router = 'Beranda';
	protected $method = 'index';
	protected $count = [];

	public function __construct()
	{
		$url = $this->parseURL();

		// router
		if($url == NULL) {
			$url = [$this->router];
		}
		if(file_exists('../Tools/aliran/' . $url[0] . '.php')) {
			$this->router = $url[0];
			unset($url[0]);
		}

		include '../Tools/aliran/' . $this->router . '.php';
		$this->router = new $this->router;

		// method
		if(isset($url[1])) {
			if(method_exists($this->router, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		// count
		if(!empty($url)) {
			$this->count = array_values($url);
		}

		// run router & method, and send the count if exist
		call_user_func_array([$this->router, $this->method], $this->count);
	}

	public function parseURL()
	{
		if(isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}