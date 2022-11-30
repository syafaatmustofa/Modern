@extends('layouts.app')

@section('content')
<div class="container px-4 text-center">
    <div class="row gx-5">
        @foreach ($data as $item)
        <div class="col">
            <div class="card rounded d-flex p-2" style="width: 18rem;">
                <img src="{{ asset('storage/'.$item->cover) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p class="card-text">{{ $item->sinopsis }}</p>
                    <p class="card-text">{{ $item->penerbit }} , {{ $item->isbn }}</p>
                    <a href="{{ route('buku.show', $item->id) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
