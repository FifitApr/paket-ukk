@extends('starter')

@section('Judul', 'Form Edit')
@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update-fkamar', $adminfkamar->id) }}" method="POST">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nama Fasilitas</label>
                            <input type="text" class="form-control" name="nm_fasilitas" value="{{ $adminfkamar->nm_fasilitas }}">
                            @error('nm_fasilitas')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="ket" value="{{ $adminfkamar->ket }}">
                            @error('nm_fasilitas')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-3"> 
                            <input type="file" class="form-control" id="inputGroupFile02" name="gambar">
                        </div>
                        {{-- <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="text" class="form-control" name="gambar" value="{{ $adminfkamar->gambar }}">
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection