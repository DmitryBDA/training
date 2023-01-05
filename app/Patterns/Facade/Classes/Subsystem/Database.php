<?php

namespace App\Patterns\Facade\Classes\Subsystem;

class Database
{
    public function insert()
    {
        \Debugbar::info('Запись в базу данных');
    }

    public function del()
    {
        \Debugbar::info('Удалить из базы данных');
    }


}
