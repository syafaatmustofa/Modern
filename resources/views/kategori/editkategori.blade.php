@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('kategori.update' , $kategori->id) }}">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
        <input type="text" class="form-control" name="nama" value="{{ $kategori->nama }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/kategori" class="btn btn-danger">back</a>

</form>

@endsection
