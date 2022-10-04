<?php

namespace App\Http\Controllers;

use App\Models\admin_fasilitas;
use App\Models\admin_fasilitaskamar;
use Illuminate\Http\Request;

class Admin_FKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminfkamar = admin_fasilitaskamar::all();
        return view('Admin.FKamar.fkamar', compact('adminfkamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.fkamar.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adminfkamar = admin_fasilitaskamar::create($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move ('fotonya/',$request->file('gambar')->getClientOriginalName());
            $adminfkamar->gambar = $request->file('gambar')->getClientOriginalName();
            $adminfkamar->save();
        }

        return Redirect('/fkamar');
        // admin_fasilitaskamar::create([
        //     'nm_fasilitas' => $request->nm_fasilitas,
        //     'ket' => $request->ket,
        //     'gambar' => $request->gambar,
        // ]);

        // return Redirect('/fkamar')->with('success', 'Data Berhasil Ditambahkan');
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
        $adminfkamar=admin_fasilitaskamar::findorfail($id);
        return view('Admin.FKamar.edit',compact('adminfkamar'));
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
        $adminfkamar = admin_fasilitaskamar::findorfail($id);
        $adminfkamar->update($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move ('fotonya/',$request->file('gambar')->getClientOriginalName());
            $adminfkamar->gambar = $request->file('gambar')->getClientOriginalName();
            $adminfkamar->save();
        }
        return redirect('/fkamar');
        // $this->validate($request,[
        //     'nm_fasilitas' => 'required',
        //     'ket' => 'required',
        //     'gambar' => 'required',
        // ]);
        // $adminfkamar=admin_fasilitaskamar::findorfail($id);
        // $adminfkamar->update($request->all());

        // return Redirect('/fkamar')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminfkamar=admin_fasilitaskamar::findorfail($id);
        $adminfkamar->delete();
        return back()->with('destroy','data berhasil dihapus');
    }
}
