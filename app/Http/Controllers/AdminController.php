<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
    	$cus = User::paginate(10);
        return view('admin',compact('cus'));
    }
}
