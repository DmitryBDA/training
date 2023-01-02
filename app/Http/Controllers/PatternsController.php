<?php

namespace App\Http\Controllers;

use App\Patterns\ContainerProperty\Classes\BlogPost;

class PatternsController extends Controller
{
    public function containerProperty(): string
    {
        $blogPost = new BlogPost('title', 'desc');
        $blogPost->addProperty('new_property', 'value new property');
        \Debugbar::info($blogPost);
        \Debugbar::info($blogPost->getProperty('new_property'));

        return 'pattern containerProperty';
    }
}
