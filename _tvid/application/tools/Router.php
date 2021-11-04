<?php 

class Router {
	public function interface($view, $data = [])
	{
		include_once '../application/interfaces/' . $view . '.php';
	}

	public function dabes($meta)
	{
		include_once '../application/dbs/' . $meta . '.php';
		return new $meta;
	}
}