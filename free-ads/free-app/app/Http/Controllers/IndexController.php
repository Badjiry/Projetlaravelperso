<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class IndexController extends Controller
{
    public function showIndex(): View
    {
        return view('index');
    }
}