<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller_Template{

    public function action_index()
    {
        $time = Date('Y-m-d h:i:s');
        $this->response->body("Hello, world! current time:$time");
    }

    public function action_phpInfo()
    {
        echo phpinfo();
    }

    public function action_monitor(){
        $view = View::factory('zadmin/monitor');
        $this->response->body($view);
    }

    public function action_view()
    {
        $view = View::factory('testView');
        $this->response->body($view);
    }


} // End Welcome