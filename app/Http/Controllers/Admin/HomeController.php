<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\departments;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $count = User::whereNotNull('remember_token')->count();
        return view('admin.home.index', ['count'=>$count]);
    }
}
