@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col">
            <h1>Data Buku</h1>
            <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Sinopsis</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Cover</th>
                        <th scope="col">kategori</th>
                        <th scope="col">tampil</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->isbn }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->sinopsis }}</td>
                        <td>{{ $item->penerbit }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$item->cover) }}" alt="" width="100px">
                        </td>
                        <td>{{ $item->kategori->nama }}</td>
                        <td>
                            @if($item->tampil == 1)
                                <span class="text-primary fw-semibold">Tampilkan</span>
                                @else
                                <span class="text-danger fw-semibold">Tidak Ditampilkan</span>
                            @endif
                        </td>
                        <td >
                            <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-primary">edit</a>
                            <a href="{{ route('deletebuku',$item->id) }}" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection