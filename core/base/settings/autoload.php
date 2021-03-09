<?php
//Функция автозагрузки файлов
use core\base\exceptions\RouteException;

function Autoload($class_name)
{
    $class_name = str_replace('\\', '/', $class_name);
    if (!@include $class_name . '.php') {
        throw new RouteException('Не верное имя файла для подключения - ' . $class_name);
    }
}

spl_autoload_register('Autoload');
