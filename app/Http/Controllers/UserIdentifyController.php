<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UserIdentifyController extends Controller
{
    public function identifyUser()
    {
   
        $usertype = Auth::user()->usertype;
        if($usertype == '1'){
            return view('admin-dashboard.dashboard');
        }
        else{
      
            return view('student-dashboard.index');
        }
    }
}
