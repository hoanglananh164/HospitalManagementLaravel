<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AppController extends Controller
{
    //
    public function display(){
        $app = Appointment::orderBy('created_at', 'DESC')->get();
        return view('admin.display_app', [
            'app' => $app
        ]);
    }

    public function del(Request $request, $id) {
        if($request->has('app-del')) {
            Appointment::find($id)->delete();
            return redirect()->route('admin.display_app');
        }
    }
}
