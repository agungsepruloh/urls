<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Link;

class UrlsController extends Controller
{

    public function index() {

    }
    
    public function store(Request $request) {
        dd($request->all());
    }
}
