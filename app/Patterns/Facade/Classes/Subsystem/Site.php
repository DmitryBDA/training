<?php

namespace App\Patterns\Facade\Classes\Subsystem;

class Site
{
    public function placement():void
    {
        \Debugbar::info('Размешение на сайте');
    }

    public function del():void
    {
        \Debugbar::info('Удаление с сайта');
    }
}
