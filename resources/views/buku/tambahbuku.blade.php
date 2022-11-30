@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('buku.store') }}" id="idform" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input type="number" class="form-control" name="isbn" placeholder="Masukkan isbn">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="judul" placeholder="Masukkan judul">
    </div>
    <div class="mb-3">
        <textarea name="sinopsis" id="idform" cols="30" rows="10" placeholder="Masukkan Sinopsis"></textarea>
        {{-- <input type="text" class="form-control" name="sinopsis" placeholder="Masukkan sinopsis"> --}}
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="penerbit" placeholder="Masukkan Penerbit">
    </div>
    <div class="mb-3">
        <input type="file" class="form-control" name="cover">
    </div>
    <div class="mb-3">
        {{-- <label class="form-label">Kategori</label> --}}
        <select class="form-select" aria-label="Default select example" name="kategori_id">
            <option selected disabled>Pilih Kategori</option>
            @foreach ($kategori as $kt)
            <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
            @endforeach
        </select>
    </div>  
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/buku" class="btn btn-danger">back</a>

</form>

@endsection
