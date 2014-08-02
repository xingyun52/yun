<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
        $time = date('Y-m-d H:i:s');
		$this->response->body("hello, world!!!$time");
	}

} // End Welcome
