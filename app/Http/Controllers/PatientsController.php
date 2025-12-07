<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function AllPatientsList()
    {
        $jsonContent = file_get_contents('build/json/all-patients.json');
        if ($jsonContent !== false) {
            $allPatientsList = json_decode($jsonContent, true);
        } else {
            $allPatientsList = [];
        }
        return view('all-patients-list', compact('allPatientsList'));  
    }
}
