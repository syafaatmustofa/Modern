@extends('layouts.app')

@section('content')
<div class="container">
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{ $buku->judul }}</h1>
                <p class="lead text-muted">{{ $buku->sinopsis }}</p>
                <p class="lead text-muted">{{ $buku->penerbit }}</p>
                <a href="/" class="btn btn-danger">Back</a>
            </div>
        </div>
    </section>

    </main>

</div>

@endsection