<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function UserPermissionSettings()
    {
        $jsonContent = file_get_contents('build/json/user-permissions-settings.json');
        if ($jsonContent !== false) {
            $Settings = json_decode($jsonContent, true);
        } else {
            $Settings = [];
        }
        return view('user-permissions-settings', compact('Settings'));
    }

    public function PlansBillingsSettings()
    {
        $jsonContent = file_get_contents('build/json/plans-billings-settings.json');
        if ($jsonContent !== false) {
            $Settings = json_decode($jsonContent, true);
        } else {
            $Settings = [];
        }
        return view('plans-billings-settings', compact('Settings'));  
    }
}
