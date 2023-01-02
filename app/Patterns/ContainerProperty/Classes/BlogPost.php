<?php

namespace App\Patterns\ContainerProperty\Classes;

use App\Patterns\ContainerProperty\PropertyContainer;

final class BlogPost extends PropertyContainer
{
    private string $title;
    private string $description;

    /**
     * @param string $title
     * @param string $description
     */
    public function __construct(string $title, string $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
