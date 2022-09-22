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
        $resepsionis =resepsionis::all();
        return view('Resepsionis.tampil', compact('resepsionis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Resepsionis.tampil');
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
        $resepsionis=resepsionis::findorfail($id);
        return view('Resepsionis.edit',compact('resepsionis'));
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
        $resepsionis=resepsionis::findorfail($id);
        $resepsionis->update($request->all());

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
        $resepsionis=resepsionis::findorfail($id);
        $resepsionis->delete();
        return back()->with('destroy','data berhasil dihapus');
    }
}
