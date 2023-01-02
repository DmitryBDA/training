<?php

namespace App\Patterns\ContainerProperty\Interfaces;

interface iPropertyContainer
{
    /**
     * @param string $propertyName
     * @param $value
     */
    function addProperty(string $propertyName, $value);

    /**
     * @param string $propertyName
     * @return mixed
     */
    function getProperty(string $propertyName): mixed;

    /**
     * @param string $propertyName
     */
    function deleteProperty(string $propertyName);

    /**
     * @param string $propertyName
     * @param $value
     */
    function setProperty(string $propertyName, $value);

}
