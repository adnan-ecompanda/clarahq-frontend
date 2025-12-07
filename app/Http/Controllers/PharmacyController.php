<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    public function Pharmacy()
    {
        $jsonContent = file_get_contents('build/json/pharmacy.json');
        if ($jsonContent !== false) {
            $pharmacy = json_decode($jsonContent, true);
        } else {
            $pharmacy = [];
        }
        return view('pharmacy', compact('pharmacy'));  
    }

    public function LabResults()
    {
        $jsonContent = file_get_contents('build/json/lab-results.json');
        if ($jsonContent !== false) {
            $labResults = json_decode($jsonContent, true);
        } else {
            $labResults = [];
        }
        return view('lab-results', compact('labResults'));  
    }

    public function MedicalResults()
    {
        $jsonContent = file_get_contents('build/json/medical-records.json');
        if ($jsonContent !== false) {
            $medicalResults = json_decode($jsonContent, true);
        } else {
            $medicalResults = [];
        }
        return view('medical-results', compact('medicalResults'));  
    }
}
