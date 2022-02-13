<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addView()
    {
        return view('admin.add_doctor');
    }
    public function uploadDoctor(Request $request)
    {
        $doctor = new Doctor();
        return $request->all();
    }
}
