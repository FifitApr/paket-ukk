<?php

namespace App\Http\Controllers;

use App\Models\resepsionis;
use Illuminate\Http\Request;

class ResepsionisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resep =resepsionis::all();
        return view('Resepsionis.tampil', compact('resep'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Resepsionis.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        resepsionis::create([
            'nm_pemesan' => $request->nm_pemesan,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'nm_tamu' => $request->nm_tamu,
            'tipekamar' => $request->tipekamar,
            'tgl_cekin' => $request->tgl_cekin,
            'tgl_cekout' => $request->tgl_cekout,
        ]);

        return Redirect('/resep')->with('success', 'Data Berhasil Ditambahkan');
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
        $resep=resepsionis::findorfail($id);
        return view('Resepsionis.edit',compact('resep'));
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
            'nm_pemesan' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'nm_tamu' => 'required',
            'tipekamar' => 'required',
            'tgl_cekin' => 'required',
            'tgl_cekout' => 'required',
        ]);
        $resep=resepsionis::findorfail($id);
        $resep->update($request->all());

        return Redirect('/resep')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resep=resepsionis::findorfail($id);
        $resep->delete();
        return back()->with('destroy','data berhasil dihapus');
    }
}
