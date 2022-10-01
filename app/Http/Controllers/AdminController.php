<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_kamar;

class AdminController extends Controller
{
    public function index(){
        $adminkamar = admin_kamar::all();
        return view('Admin.Kamar.kamar', compact('adminkamar'));
    }
}
