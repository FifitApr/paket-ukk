<?php

namespace App\Http\Controllers;

use App\Models\admin_kamar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $adminkamar = admin_kamar::all();
        return view('Admin.Kamar.kamar', compact('adminkamar'));
    }
}
