<?php

namespace App\Patterns\EventChannel\Interfaces;

interface iPublisher
{
    /**
     * @param string $data Данные которыми уведомятся подписчика
     */
    public function publish(string $data);
}
