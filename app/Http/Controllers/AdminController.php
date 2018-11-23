<?php

namespace App\Http\Controllers;

use App\User;
use App\Advertisements;
class AdminController extends Controller
{
    public function index(){
        return view('pages.adminHome');
    }
    public function user(){
        return view('admin.users')->with('user',User::all());
    }
    public function adver(){
        return view('admin.adds')->with('ad',Advertisements::all());
    }

}
