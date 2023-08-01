<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;


class HomeController extends Controller
{
    //
    public function index(){
        $doctor = Doctor::all();
        return view('user.home',[
            'doctor' => $doctor
        ]);
    }

    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype =='0'){
                $doctor = Doctor::all();
                return view('user.home',[
                    'doctor' => $doctor
                ]);
            }else{
                return view('admin.home');
            }
        }else {
            return redirect()->back();
        }
    }
}
