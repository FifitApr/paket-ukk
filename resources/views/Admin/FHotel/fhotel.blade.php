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
                    <a href="{{ url('create-fhotel') }}" class="btn btn-success">Tambah +</a>

                    {{-- table --}}


                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Tipe Kamar</th>
                            <th scope="col">Nama Fasilitas</th>
                            <th scope="col">Option</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($adminfhotel as $item)
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->tipekamar }}</td>
                            <td>{{ $item->nm_fasilitas }}</td>
                            <td>
                                <a href="{{url('edit-fhotel', $item->id)}}" class="btn btn-warning">Edit</a>
                                <form action="{{ url('delete-fhotel',$item->id) }}" method="POST">
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