<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
class AdminController extends Controller
{
    public function post(){
        return view("admin.posts");
    }

    public function addnew(){
        return view("admin.addnew");
    }
}
