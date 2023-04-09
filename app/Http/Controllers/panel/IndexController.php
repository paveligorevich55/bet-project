<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    public function index(): Response
    {
        return response()->view('dashboard');
    }
}
