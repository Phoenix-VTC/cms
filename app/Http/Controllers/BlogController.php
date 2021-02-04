<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepository;

class BlogController extends AbstractCmsController
{
    protected static $viewPage = 'site.layouts.blog';
    protected static $viewOverview = 'site.layouts.blogs';
    protected static $repository = BlogRepository::class;
}
