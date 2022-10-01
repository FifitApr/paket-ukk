<?php

namespace App\Http\Controllers;

use App\Models\admin_fasilitas;
use Illuminate\Http\Request;

class Admin_FHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminfhotel =admin_fasilitas::all();
        return view('Admin.FHotel.fhotel', compact('adminfhotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.FHotel.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adminfhotel = admin_fasilitas::create($request->all());

        return Redirect('/fhotel')->with('success', 'Data Berhasil Ditambahkan');
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
        $adminfhotel=admin_fasilitas::findorfail($id);
        return view('Admin.FHotel.edit',compact('adminfhotel'));
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
            'nm_fasilitas' => 'required',
        ]);
        $adminfhotel=admin_fasilitas::findorfail($id);
        $adminfhotel->update($request->all());

        return Redirect('/fhotel')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminfhotel=admin_fasilitas::findorfail($id);
        $adminfhotel->delete();
        return back()->with('destroy','data berhasil dihapus');
    }
}
