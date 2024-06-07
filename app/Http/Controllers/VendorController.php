<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function VendorDashboard(){
        return view('vendor.index');
    } //End method

    public function VendorLogin(){
        return view('vendor.vendor_login');
    } //End method
}
