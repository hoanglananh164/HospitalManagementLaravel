<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Http\Requests\DoctorRequest;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    //"_token" => "AdrLHBqW1lfVjHwYuXAWuuSpMdsY8aGG9m13crYJ"
//   "name" => "elsa"
//   "phone" => "0909090991"
//   "speciality" => "skin"
//   "room" => "12"
//   "submit" => null
//   "file" => Illuminate\Http\UploadedFile {#459 ▶}
    public function create(){
        return view('admin.create_doctor');
    }

    public function store(Request $request){
        
        if($request->has('submit')){
            // $doctor = new doctor;
            $data = $request->except(['_token', 'submit']);
            // dd($data);
            Doctor::create($data);
            
            // $image = $request->file;
            // //upload
            // $imagename = time().'.'.$image->getClientOriginalExtension();
            // //move folder
            // $request->file->move('doctorimage', $imagename);
            // //insert db
            // $doctor->image=$imagename;
            // $doctor->save();

            return redirect()->route('admin.create_doctor')->with('noti', 'Success');
        }
        return redirect()->route('create_doctor');

    }

    public function display(){
        $doctors = Doctor::all();
        return view('admin.display_doctors', [
            'doctors' => $doctors
        ]);
    }

    public function del(Request $request, $id){

        if($request->has('doctor-del')){
            Doctor::find($id)->delete();
            return redirect()->route('admin.display_doctors');
        }

    }

    public function edit($id){
        $doctor= Doctor::where('id', $id)->first();
        return view('admin.edit_doctors', [
            'doctor' => $doctor
        ]);
    }

    public function update(Request $request, $id){
        if($request->has('btn-up')){
            $data = $request->except(['_token', 'btn_submit']);
            Doctor::find($id)->update($data);
            return redirect()->route('admin.display_doctors')->with('noti', 'Success');
        }
        return redirect()->route('display_doctors');
    }

} 
