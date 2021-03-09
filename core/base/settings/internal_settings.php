<?php
defined('VG_ACCESS') or die("ERROR_404");

const PATH = '/';
const ADMIN_TEMPLATE = DIR_CORE . 'admin/views';


const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY = '';
const COOKIE_TIME = 30;
const BLOCK_TIME = 3;

const QTY = 8;
const QTY_LINKS = 3;
const ADMIN_CSS_JS = [
  'styles' => [],
  'scripts' => []
];
const USER_CSS_JS = [
  'styles' => [],
  'scripts' => []
];


/**
 * Автозагрузка классов
 *
 * @param $class_name
 */
 function AutoloadClass($class_name)
{
    $class_name = str_replace('\\', '/', $class_name);

    if (!include $class_name . '.php') {

        throw new RouteException('Не верное имя файла для подключения - ' . $class_name);
    }

}
spl_autoload_register('AutoloadClass');

