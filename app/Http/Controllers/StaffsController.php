<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffsController extends Controller
{
    public function Staffs()
    {
        $jsonContent = file_get_contents('build/json/staffs.json');
        if ($jsonContent !== false) {
            $Staffs = json_decode($jsonContent, true);
        } else {
            $Staffs = [];
        }
        return view('staffs', compact('Staffs'));  
    }
}
