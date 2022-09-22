@extends('starter')

@section('Judul', 'Form Edit')
@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update', $resepsionis->id) }}" method="POST">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nama Pemesan</label>
                            <input type="text" class="form-control" name="nm_pemesan" value="{{ $resepsionis->nm_pemesan }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $resepsionis->email }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Telp</label>
                            <input type="number" class="form-control" name="no_hp" value="{{ $resepsionis->no_hp }}">
                          </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Tamu</label>
                            <input type="text" class="form-control" name="nm_tamu" value="{{ $resepsionis->nm_tamu }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipe Kamar</label>
                            <select name="tipekamar" class="form-select form-control" id="">
                                <option selected>{{ $resepsionis->tipekamar }}</option>
                                <option value="Superior">Superior</option>
                                <option value="Deluxe">Deluxe</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Check In</label>
                            <input type="datetime" class="form-control" name="tgl_cekin" value="{{ $resepsionis->tgl_cekin }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Check Out</label>
                            <input type="datetime" class="form-control" name="tgl_cekout" value="{{ $resepsionis->tgl_cekout }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection