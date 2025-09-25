<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Discover The Future Together';
        return view('pages.index', )->with('title', $title);
    }
}
