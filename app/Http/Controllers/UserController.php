<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class UserController extends Controller
{
    public function AllUser()
    {
           $all = FacadesDB::tanle('users')->get();
           return view('backend.user.all-user',compact ('all'));
    }
}
