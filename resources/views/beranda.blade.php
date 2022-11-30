@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card rounded d-flex p-2" style="width: 18rem;">
        @foreach ($data as $item)
        <img src="{{ asset('storage/'.$item->cover) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $item->judul }}</h5>
            <p class="card-text">{{ $item->sinopsis }}</p>
            <p class="card-text">{{ $item->penerbit }} , {{ $item->isbn }}</p>
            <a href="{{ route('buku.show', $item->id) }}" class="btn btn-primary">Detail</a>
        </div>
        @endforeach
    </div>
</div>
@endsection
