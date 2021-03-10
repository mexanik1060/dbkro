<?php

namespace  core\users;

use core\base\controller\Controller;

/**
 * undocumented class
 */
class SiteController extends Controller
{
    public function hello()
    {
        $template = $this->render(false, ['site'=>'Я страница сайта']);
        exit($template);
    }
}
