<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitsController extends Controller
{
    public function visits()
    {
        $jsonContent = file_get_contents('build/json/visits.json');
        if ($jsonContent !== false) {
            $visits = json_decode($jsonContent, true);
        } else {
            $visits = [];
        }
        return view('visits', compact('visits'));
    }

    public function Appointments()
    {
        $jsonContent = file_get_contents('build/json/appointments.json');
        if ($jsonContent !== false) {
            $appointments = json_decode($jsonContent, true);
        } else {
            $appointments = [];
        }
        return view('appointments', compact('appointments'));
    }
}
