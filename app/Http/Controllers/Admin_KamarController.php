<?php

namespace App\Http\Controllers;

use App\Models\admin_kamar;
use Illuminate\Http\Request;

class Admin_KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminkamar =admin_kamar::all();
        return view('Admin.Kamar.kamar', compact('adminkamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Kamar.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        admin_kamar::create([
            'tipekamar' => $request->tipekamar,
            'jmlkamar' => $request->jmlkamar,
        ]);

        return Redirect('/')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminkamar=admin_kamar::findorfail($id);
        return view('Admin.Kamar.edit',compact('adminkamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'tipekamar' => 'required',
            'jmlkamar' => 'required',
        ]);
        $adminkamar=admin_kamar::findorfail($id);
        $adminkamar->update($request->all());

        return Redirect('/')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminkamar=admin_kamar::findorfail($id);
        $adminkamar->delete();
        return back()->with('destroy','data berhasil dihapus');
    }
}
