<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function  index(){
        return view("admin.index");
    }

    public function  accounts(){
        return view("admin.accounts");
    }

    public function  inventory(){
        return view("admin.inventory");
    }

    /*for users*/

    public function userindex(){
        return view("users.userindex");
    }

    public function menu(){
        $products = Product::all();
    return view('users.menu', compact('products'));
    }

    public function account(){
        return view("users.account");
    }
    
    public function modal(){
        return view("layouts.modal");
    }
    

    public function about(){
        return view("users.about");
    }

    public function login(){
        return view("registrations.login");
    }

    public function payment(){
        return view("users.checkout");
    }

    
}
