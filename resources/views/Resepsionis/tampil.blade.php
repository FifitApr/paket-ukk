@extends('starter')

@section('Judul', 'Resepsionis')
@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Resepsionis</h1>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                      {{ $message }}
                    </div>
                    @endif
                    <a href="{{ url('create-resep') }}" class="btn btn-success">Tambah +</a>

                    {{-- table --}}


                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Pemesan</th>
                            <th scope="col">Email</th>
                            <th scope="col">No. Telp</th>
                            <th scope="col">Nama Tamu</th>
                            <th scope="col">Tipe Kamar</th>
                            <th scope="col">Tgl Check In</th>
                            <th scope="col">Tgl Check Out</th>
                            <th scope="col">Option</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($resepsionis as $item)
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nm_pemesan }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->nm_tamu }}</td>
                            <td>{{ $item->tipekamar }}</td>
                            <td>{{ $item->tgl_cekin }}</td>
                            <td>{{ $item->tgl_cekout }}</td>
                            <td>
                                <a href="{{url('edit-resep', $item->id)}}" class="btn btn-warning">Edit</a>
                                <form action="{{ url('delete-resep',$item->id) }}" method="POST">
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