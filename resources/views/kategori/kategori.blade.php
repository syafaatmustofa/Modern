@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col">
            <h1>Data Kategori</h1>
            <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Data</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama }}</td>
                        <td >
                            <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-primary">edit</a>
                            <a href="{{ route('deletekategori',$item->id) }}" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection