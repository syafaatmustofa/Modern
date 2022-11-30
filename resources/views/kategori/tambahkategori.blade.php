@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('kategori.store') }}">
    @csrf
    <div class="mb-3">
        {{-- <label for="exampleInputEmail1" class="form-label">Nama Kategori</label> --}}
        <input type="text" class="form-control" name="nama" placeholder="isi Kategori">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/kategori" class="btn btn-danger">back</a>
</form>

@endsection
