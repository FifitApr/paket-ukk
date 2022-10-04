@extends('starter')

@section('Judul', 'Form Tambah')
@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('simpan') }}" method="POST">
                        {{ csrf_field() }}
                        
                        <div class="mb-3">
                            <label class="form-label">Tipe Kamar</label>
                            <input type="text" class="form-control" name="tipekamar">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah Kamar</label>
                            <input type="number" class="form-control" name="jmlkamar">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection