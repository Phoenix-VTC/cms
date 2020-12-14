<?php

namespace App\Http\Controllers;

use App\Repositories\PageRepository;

class PageController extends AbstractCmsController
{
    protected static $viewPage = 'site.layouts.page';
    protected static $repository = PageRepository::class;
}
