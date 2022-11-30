@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            {{-- form proses edit --}}
            <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="form-label">ISBN</label>
                    <input type="text" class="form-control" name="isbn" value="{{ $buku->isbn }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ $buku->judul }}">
                </div>
                <div class="mb-3">
                    <textarea name="sinopsis" id="formid" cols="30" rows="10">{{ $buku->sinopsis }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" value="{{ $buku->penerbit }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Cover</label>
                    <img src="{{ asset('storage/'.$buku->cover) }}" alt="" width="100px">
                    <input class="form-control" type="file" name="cover">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori_id">
                        <option selected>select menu</option>
                        @foreach ($kategori as $kt)
                        <option value="{{ $kt->id }}" @selected($buku->kategori_id==$kt->id)>{{ $kt->nama }}</option>
                        @endforeach
                    </select>
                </div>    
                @if(Auth::user()->role == 'admin')
                <div class="form-control p-3">
                    <label>Tampilkan</label>
                    <input type="radio" class="form-check-input" name="tampil" {{ $buku->tampil == 1 ? 'checked' : '' }} value="1">
                    <label>sembunyikan</label>
                    <input type="radio" class="form-check-input" name="tampil" {{ $buku->tampil == 0 ? 'checked' : '' }} value="0">
                </div>          
                @endif
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/buku" class="btn btn-danger">back</a>
            </form>

        </div>
    </div>
</div>
@endsection