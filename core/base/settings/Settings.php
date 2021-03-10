<?php

namespace core\base\settings;

class Settings
{
    /**
     * @var
     */
    static private $_instance;

    /**
     * Глобальные настройки:
     *  - Свойства маршрутов
     *
     */

    private array $routes =
        [
            'admin' =>
                [
                    'alias' => 'admin',
                    'path' => 'core/admin/controller/',
                    'hrUrl' => false,
                    'routes' => [

                    ],
                ],
            'settings' =>
                [
                    'path' => 'core/base/settings/'
                ],
            'plugins' =>
                [
                    'path' => 'core/plugins/',
                    'hrUrl' => false,
                    'dir' => false,
                ],
            'users' =>
                [
                    'path' => 'core/users/controller/',
                    'hrUrl' => true,
                    'routes' => [
                        'site' => 'index/hello'

                    ],
                ],
            'default' => [
                'controller' => 'IndexController',
                'inputMethod' => 'inputData', #Входные данные
                'outputMethod' => 'outputData' #Выходные данные

            ],
        ];

    private array $template = [
        'text' => ['name', 'phone', 'address'],
        'textarea' => ['content', 'keywords']

    ];
    private string $tests = 'tests';


    public function __construct()
    {
    }

    public function __clone()
    {
    }


     public static function get($property)
    {
        return self::instance()->$property;
    }


    /**Шаблон проектирования сингл тон*/
     public static function instance()
    {

        if (self::$_instance instanceof self) {
            return self::$_instance;
        }

        return self::$_instance = new self;
    }

    /**
     * @param $class
     * @return array
     */
    public function clueProperties($class)
    {
        $baseProperties = [];

        foreach ($this as $name => $item) {
            $property = $class::get($name);


            //Клеим массивы
            if (is_array($property) && is_array($item)) {

                //Вызываем метод
                $baseProperties[$name] = $this->arrayMergeRecursive($this->$name, $property);
                continue;
            }

            if (!$property) $baseProperties[$name]->$name;
        }

        return $baseProperties;
    }


    //Клеим массивы - рекурсивный метод
    public function arrayMergeRecursive()
    {
        $arrays = func_get_args();
        $base = array_shift($arrays);

        foreach ($arrays as $array) {
            foreach ($array as $key => $value) {
                if (is_array($value) && is_array($base[$key])) {

                    $base[$key] = $this->arrayMergeRecursive($base[$key], $value);
                } else {
                    if (is_int($key)) {
                        if (!in_array($value, $base)) array_push($base, $value);
                        continue;
                        /**Если все хорошо идем на следующую итерацию цикла.*/
                    }
                    $base[$key] = $value;
                }
            }
        }
        return $base;
    }



}
