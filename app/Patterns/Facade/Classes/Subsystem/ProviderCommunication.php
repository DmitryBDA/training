<?php

namespace App\Patterns\Facade\Classes\Subsystem;

class ProviderCommunication
{
    public function receive():void
    {
        \Debugbar::info('получение продукции от производителя');
    }

    public function payment():void
    {
        \Debugbar::info('Оплата поставщивку');
    }
}
