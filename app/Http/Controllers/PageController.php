<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function blog() {
        return view('blog');
    }
    public function nosotros() {
        return view('nosotros');
    }
}

?>
