@extends('starter')

@section('Judul', 'Data Kamar')
@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Data Kamar</h1>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                      {{ $message }}
                    </div>
                    @endif
                    <a href="{{ url('create-kamar') }}" class="btn btn-success">Tambah +</a>

                    {{-- table --}}


                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Tipe Kamar</th>
                            <th scope="col">Jumlah Kamar</th>
                            <th scope="col">Option</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($adminkamar as $item)
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->tipekamar }}</td>
                            <td>{{ $item->jmlkamar }}</td>
                            <td>
                                <a href="{{url('edit-kamar', $item->id)}}" class="btn btn-warning">Edit</a>
                                <form action="{{ url('delete-kamar',$item->id) }}" method="POST">
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