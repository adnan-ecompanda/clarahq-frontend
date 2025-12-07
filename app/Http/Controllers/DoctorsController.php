<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function AllDoctorsList()
    {
        $jsonContent = file_get_contents('build/json/all-doctors.json');
        if ($jsonContent !== false) {
            $allDoctorsList = json_decode($jsonContent, true);
        } else {
            $allDoctorsList = [];
        }
        return view('all-doctors-list', compact('allDoctorsList'));  
    }
}
