<?php

/**
 * Created by PhpStorm.
 * User: jaackie
 * Date: 2017/3/11
 * Time: 下午3:48
 */
class IndexController extends base_controller
{
    public function indexAction()
    {
        echo "Hello! This is Jaackie!";
    }

    public function testAction()
    {
        __d(testModel::instance()->find(1));
    }

}