@extends('starter')

@section('Judul', 'Data Fasilitas Hotel')
@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Data Fasilitas Hotel</h1>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                      {{ $message }}
                    </div>
                    @endif
                    <a href="{{ url('create-fkamar') }}" class="btn btn-success">Tambah +</a>

                    {{-- table --}}


                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Fasilitas</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Option</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($adminfkamar as $item)
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nm_fasilitas }}</td>
                            <td>{{ $item->ket }}</td>
                            <td>
                            <img src="{{ asset('public/foto/'.$item->gambar) }}" alt="" style="width: 100px">
                            </td>
                            <td>
                                <a href="{{url('edit-fkamar', $item->id)}}" class="btn btn-warning">Edit</a>
                                <form action="{{ url('delete-fkamar',$item->id) }}" method="POST">
                                  @csrf
                                 @method('delete')
                                <button class="btn btn-danger">Hapus</button></form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection