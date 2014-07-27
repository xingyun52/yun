<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mogujie-chenxing
 * Date: 14-7-28
 * Time: 上午12:20
 * To change this template use File | Settings | File Templates.
 */
class Controller_Zadmin_Test extends Controller {

    public function action_hello()
    {
        $this->response->body('hello, yun!');
    }
}
