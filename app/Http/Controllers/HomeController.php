<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        return response()->redirectToRoute('page.show', ['locale' => 'en', 'slug' => 'home']);
    }
}
