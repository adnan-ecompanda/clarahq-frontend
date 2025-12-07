<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function Contacts()   
    {
        $jsonContent = file_get_contents('build/json/contacts.json');
        if ($jsonContent !== false) {
            $contacts = json_decode($jsonContent, true);
        } else {
            $contacts = [];
        }
        return view('contacts', compact('contacts'));  
    }

    public function ContactList()   
    {
        $jsonContent = file_get_contents('build/json/contacts-list.json');
        if ($jsonContent !== false) {
            $contactList = json_decode($jsonContent, true);
        } else {
            $contactList = [];
        }
        return view('contact-list', compact('contactList'));  
    }

    public function Invoice()
    {
        $jsonContent = file_get_contents('build/json/invoice.json');
        if ($jsonContent !== false) {
            $invoices = json_decode($jsonContent, true);
        } else {
            $invoices = [];
        }
        return view('invoice', compact('invoices'));  
    }

    public function ManageInvoices()
    {
        $jsonContent = file_get_contents('build/json/manage-invoices.json');
        if ($jsonContent !== false) {
            $manageInvoices = json_decode($jsonContent, true);
        } else {
            $manageInvoices = [];
        }
        return view('manage-invoices', compact('manageInvoices'));  
    }
}
