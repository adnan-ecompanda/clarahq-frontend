<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientDetailsController extends Controller
{
    public function patientDetailsVitalSigns()
    {
        $jsonContent = file_get_contents('build/json/patient-details-vital-signs.json');
        if ($jsonContent !== false) {
            $patient = json_decode($jsonContent, true);
        } else {
            $patient = [];
        }
        return view('patient-details-vital-signs', compact('patient')); 
    }

    public function patientDetailsVisitHistory()
    {
        $jsonContent = file_get_contents('build/json/patient-details-visit-history.json');
        if ($jsonContent !== false) {
            $patient = json_decode($jsonContent, true);
        } else {
            $patient = [];
        }
        return view('patient-details-visit-history', compact('patient')); 
    }

    public function patientDetailsPrescription()
    {
        $jsonContent = file_get_contents('build/json/patient-details-prescription.json');
        if ($jsonContent !== false) {
            $patient = json_decode($jsonContent, true);
        } else {
            $patient = [];
        }
        return view('patient-details-prescription', compact('patient')); 
    }

    public function patientDetailsMedicalHistory()
    {
        $jsonContent = file_get_contents('build/json/patient-details-medical-history.json');
        if ($jsonContent !== false) {
            $patient = json_decode($jsonContent, true);
        } else {
            $patient = [];
        }
        return view('patient-details-medical-history', compact('patient')); 
    }

    public function patientDetailsLabResults()
    {
        $jsonContent = file_get_contents('build/json/patient-details-lab-results.json');
        if ($jsonContent !== false) {
            $patient = json_decode($jsonContent, true);
        } else {
            $patient = [];
        }
        return view('patient-details-lab-results', compact('patient')); 
    }

    public function patientDetailsDocuments()
    {
        $jsonContent = file_get_contents('build/json/patient-details-documents.json');
        if ($jsonContent !== false) {
            $patient = json_decode($jsonContent, true);
        } else {
            $patient = [];
        }
        return view('patient-details-documents', compact('patient')); 
    }

    public function patientDetailsAppointments()
    {
        $jsonContent = file_get_contents('build/json/patient-details-appointments.json');
        if ($jsonContent !== false) {
            $patient = json_decode($jsonContent, true);
        } else {
            $patient = [];
        }
        return view('patient-details-appointments', compact('patient')); 
    }
}
