<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class ProductController extends Controller
{
    function create(){
        return view('productManagement.layouts.app');
    }
    function dashboardAdmin(){
        return view('productManagement.admin');
    }
    function dashboardManager(){
        return view('productManagement.manager');
    }
    function dashboardCustomer(){
        return view('productManagement.customer');
    }
    function dashboardProduct(){
        return view('productManagement.product');
    }
    function customerCreate(){
        return view('productManagement.customer');
    }
}
