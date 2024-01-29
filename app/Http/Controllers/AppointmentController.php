<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    public function appointment()
    {
        return view('components.appointment');
    }
    public function store(Request $request)
    {
        Appointment::create([
            "Name" => $request->name,
            "Email" => $request->email,
            "Phone" => $request->phone,
            "Doctors" => $request->doctors,
            "Date" => $request->date,
            "Time" => $request->time,
            "Problem_Description" => $request->problem_description,


        ]);
        return redirect()->route('appointment')->with([
            'message' => 'Message submitted successfully!',
            'status' => 'success']);
    }
}
