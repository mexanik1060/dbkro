<?php


namespace core\users\controller;


use core\base\controller\Controller;

class IndexController extends Controller
{
    public function __construct(){

        echo '<pre>'.
            '</br> - Я тестовый index контроллер по пути: app/controller/IndexController.php. 
                 </br>'.
            '</br>
                         Я нужен для проверки пути обнаружения класса в папке: 
                         '. is_dir($_SERVER['DOCUMENT_ROOT']).' - Классы контроллеров - App
                  </br> '.
            '</pre>';
    }

    public function inputData()
    {
        
    }

    public function outputData ()
    {

    }

}