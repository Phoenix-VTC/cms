<?php

namespace App\Http\Controllers;

use App\Repositories\EmployeeRepository;

class EmployeeController extends AbstractCmsController
{
    protected static $viewPage = 'site.layouts.employee';
    protected static $repository = EmployeeRepository::class;
}
