<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YetkiController extends Controller
{
    public function index(){
        auth()->user()->givePermissionTo("user-add");



    }
}
