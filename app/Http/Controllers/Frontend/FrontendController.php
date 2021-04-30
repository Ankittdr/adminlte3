<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class FrontendController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function add(){
        return view('frontend.pages.User.index');
    }
    public function userIndex(){
        return view('frontend.pages.User.index');
    }
}
