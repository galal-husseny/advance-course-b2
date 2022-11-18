<?php 
namespace App\Controllers;

class HomeController {
    public function index()
    {
        return view('dashboard.index',['name'=>'galal']);
    }
}