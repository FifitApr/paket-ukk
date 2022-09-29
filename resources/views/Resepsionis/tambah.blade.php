@extends('starter1')
@section('judul','Form Tambah')
    @section('isi1')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('simpan-resep') }}" method="POST">
                        {{ csrf_field() }}
                        
                        <div class="mb-3">
                            <label class="form-label">Tanggal Check In</label>
                            <input type="date"class="form-control " name="tgl_cekin">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Check Out</label>
                            <input type="date"class="form-control " name="tgl_cekout">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Kamar</label>
                            <input type="number" class="form-control " name="jml_kamar">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Pemesan</label>
                            <input type="text"class="form-control " name="nm_pemesan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email"class="form-control " name="email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. Telp</label>
                            <input type="number"class="form-control " name="no_hp">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Tamu</label>
                            <input type="text"class="form-control " name="nm_tamu">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipe Kamar</label>
                            <select name="tipekamar" class="form-select form-control" id="">
                                <option selected>Pilih tipe kamar</option>
                                <option value="Superior">Superior</option>
                                <option value="Deluxe">Deluxe</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection