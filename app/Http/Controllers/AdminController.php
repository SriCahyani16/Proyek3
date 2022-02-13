<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function addView()
    {
        return view('admin.add_doctor');
    }
    public function uploadDoctor(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'phone_number' => 'required|numeric',
            'speciality' => 'required|string',
            'room_number' => 'required|numeric',
            'doctor_image' => 'image',
        ]);
        $doctor = new Doctor();
        $doctor_image = time() . '.' . $request->doctor_image->getClientoriginalExtension();
        $request->doctor_image->move('doctor_image', $doctor_image);
        $doctor->name = $request->name;
        $doctor->phone_number = $request->phone_number;
        $doctor->speciality = $request->speciality;
        $doctor->room_number = $request->room_number;
        $doctor->doctor_image = $doctor_image;
        $doctor->save();
        return redirect()->back();
    }
}
