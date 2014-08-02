<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {

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

        $data['title'] = "监控页面";
        $data['content'] = "test";
        $view = $this->load->view('monitorView', $data);

        $view->render(TRUE);
    }

} // End Welcome