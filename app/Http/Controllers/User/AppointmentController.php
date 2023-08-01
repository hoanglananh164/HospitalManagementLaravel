<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    //
    public function store(Request $request) {
    
        if($request->has('app-submit')){
            if(Auth::id())
            $data = $request->except(['_token', 'app-submit']);
            $request->user_id == Auth::user()->id;
            // dd($data);
            Appointment::create($data);
            return redirect()->route('user.home')->with('noti', 'Success');
        }
        return redirect()->route('user.home');
            
        
    }

    public function appointment(Request $request) {
        
                $email = Auth::user()->email;
                $appointment = Appointment::where('email', $email)->get();
            // dd($appointment);
                return view('user.my_appointment', [
                    'appointment' => $appointment
                ]);
            
        } 

    public function delappointment(Request $request, $id){
        if($request->has('btn-del')){
            Appointment::find($id)->delete();
            return redirect()->route('user.my_appointment');
        }
    }
}
