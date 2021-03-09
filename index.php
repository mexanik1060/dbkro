<?php
//Константа безопасности
define('VG_ACCESS', true);

header('Content-Type:text/html; charset=utf-8');

session_start();

if (is_file('config.php')) {
    require_once 'config.php';
}

if (is_file(DIR_CORE . 'base/settings/internal_settings.php')){
    require_once DIR_CORE . 'base/settings/internal_settings.php';
}

use core\base\controller\RouteController; //Основной Контроллер
use core\base\exceptions\RouteException; //Исключения


try {

  RouteController::getInstance()->route();

} catch (RouteException $e) {
  exit($e->getMessage());
}
