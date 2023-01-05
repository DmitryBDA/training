<?php

namespace App\Patterns\Multiton\Trait;

trait MultitonTrait
{
    private static $instance = [];

    private $name;

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

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
    public static function getInstance(string $instanceName): static
    {
        if (isset(static::$instance[$instanceName])) {
            return static::$instance[$instanceName];
        }

        static::$instance[$instanceName] = new static();
        static::$instance[$instanceName]->setName($instanceName);

        return static::$instance[$instanceName];
    }
}
