<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Hello extends Controller {

    public function action_index()
    {
        $time = Date('Y-m-d h:i:s');
        $this->response->body("Hello, world! current time:$time");
    }

} // End Welcome