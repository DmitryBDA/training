<?php

namespace App\Patterns\Singleton\Trait;

trait SingletonTrait
{
    private static $instance = null;

    private function __construct()
    {
    }

    private function __clone(): void
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup(): void
    {
        // TODO: Implement __wakeup() method.
    }

    /**
     * @return static
     */
    public static function getInstance(): static
    {
        return static::$instance ?? (static::$instance = new static());
    }

}
