<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Advertisements;
class AdminController extends Controller
{
    public function index(){
        return view('adminHome');
    }
    public function user(){
        return view('admin.users')->with('user',User::all());
    }
    public function adver(){
        return view('admin.adds')->with('ad',Advertisements::all());
    }

}
