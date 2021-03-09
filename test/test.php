
<?php

namespace  core\base\controller\startup;

use core\base\settings\Settings;
use core\base\settings\ShopSettings;

//var_dump($www);
//echo '<br>';
/**
 * undocumented class
 */
class NameClass
{
  //Свойства класса
  public $per1 = 1;
  public $per2 = "String";
  public $per3 = true;
  //public $i;

  //Модули (функции)
  public function con()
  {

    for ($i = 0; $i < 5; $i++) {
      print $i;
    }
  }


  public function MainMetod()
  {
    $this->per1++;
  }


  public function __construct()
  {


    #### var_damp ПРОВЕКРА РАБОТЫ СКРИПТОВ #######
    /*
    $arr = ['www',1,2,3,4,5];
    Print_arr($arr); //Для вывода массива вызвать проверочную функцию
    */
    $a = Settings::instance();
    $b = ShopSettings::instance();


    $s = Settings::get('routes');
    $test = ShopSettings::get('routes');
    $test1 = ShopSettings::get('templateArr'); //Вызываем свойства плагина

    Print_arr($a);
    echo '<br/>';
    Print_arr($b);


    echo '<br/>' . '_______________' . '<br/>';
    print('масиив $s = ' . $s);
    Print_arr($s);

    echo 'масиив $test = ' . $test;
    Print_arr($test);
    Print_arr($test1);
    exit();
  }
}

//Объекты класса

$metod = new NameClass();
$metod->con();
echo $metod->i;
//var_dump($metod);


$metod2 = new NameClass();
$metod2->MainMetod();
echo '<br/>';
echo 'metod2 = ' . $metod2->per1;
//var_dump($metod2);
