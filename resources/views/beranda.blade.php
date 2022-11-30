@extends('layouts.app')

@section('content')
{{-- tampilan depan --}}
<div class="container text-center">
    <div class="row">
        @foreach ($data as $item)
        <div class="col mb-3">
            <div class="card rounded p-2" style="width: 18rem;">
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
