<?php

namespace App\Patterns\ContainerProperty;

use App\Patterns\ContainerProperty\Interfaces\iPropertyContainer;

class PropertyContainer implements iPropertyContainer
{
    private array $propertyContainer;

    function addProperty(string $propertyName, $value)
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    function getProperty(string $propertyName): mixed
    {
        return $this->propertyContainer[$propertyName] ?? null;
    }

    function deleteProperty(string $propertyName)
    {
        unset($this->propertyContainer[$propertyName]);
    }

    /**
     * @throws \Exception
     */
    function setProperty(string $propertyName, $value)
    {
        if (!isset($this->propertyContainer[$propertyName])) {
            throw new \Exception("Property [{$propertyName}] not found");
        }

        $this->propertyContainer[$propertyName] = $value;
    }
}
