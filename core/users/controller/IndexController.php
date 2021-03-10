<?php


namespace core\users\controller;


use core\base\controller\Controller;

class IndexController extends Controller
{


    public function hello()
    {
        $template = $this->render(false, ['name'=>'Я страница сайта']);
        exit($template);
    }
/*
    public function inputData()
    {
       $template = $this->render(false, ['name'=>'Маша с Уралмаша']);
       exit($template);
    }

    public function outputData ()
    {

    }
*/
}