<?php
namespace App\Controller;

use App\Framework\ControllerGet;

class MultiParameters extends ControllerGet
{
    const TEMPLATE = 'multiParameters.phtml';

    public $param1, $param2, $param3;

    public function index($params){
        $this->loadLayout(self::TEMPLATE);

        $this->param1 = $params['param1'];
        $this->param2 = $params['param2'];
        $this->param3 = $params['param3'];

        $this->render();
    }
}