<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        $title = Str::title(str_replace('-', ' ', $slug));
        return view('single', ['title' => $title]);
    }
}