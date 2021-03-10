<?php


namespace core\users\controller;


use core\base\controller\Controller;

class IndexController extends Controller
{


    public function hello()
    {
        $template = $this->render(false, ['name'=>'Я страница сайта - метод: hello']);
        exit($template);
    }

    public function inputData()
    {
       $template = $this->render(false, ['name'=>'Я страница сайта - метод: inputData']);
       exit($template);
    }

    public function outputData ()
    {

    }

}