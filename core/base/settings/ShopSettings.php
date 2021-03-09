<?php

namespace core\base\settings;

use core\base\settings\Settings;

class ShopSettings
{
    static private $_instance;

    private $baseSettings;

    /** Массивы - значения можно изменять*/
    private $routes =
        [
            'admin' => [
                    'alias' => 'admin',
                    'path' => 'core/admin/controller/',
                    'hrUrl' => false,
                    'routes' => [],
                ],


            'plugins' => [
                'path' => 'core/plugins/',
                'hrUrl' => false,
                'dir' => 'controller',
                'routes' => [],
            ],
        ];


    private $template = [
        'text' => ['price', 'short', 'name'],
        'textarea' => ['text'],
    ];


    /** ********************************************** */
    public static function get($property)
    {
        return self::instance()->$property;
    }


    /** Шаблон проeктирования Сингл тон*/
    public static function instance()
    {

        if (self::$_instance instanceof self) {
            return self::$_instance;
        }

        self::$_instance = new self;
        self::$_instance->baseSettings = Settings::instance();
        $baseProperties = self::$_instance->baseSettings->clueProperties(get_class());
        self::$_instance->setProperty($baseProperties);

        return self::$_instance;
    }

    protected function setProperty($properties)
    {
        if ($properties) {
            foreach ($properties as $name => $property) {
                $this->$name = $property;
            }
        }
    }


    public function __construct()
    {
    }

    public function __clone()
    {
    }

}
