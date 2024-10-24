@extends('layouts.app')

@section('page-title', 'Movies Index')

@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center my-5">
                    Movies Index
                </h1>
            </div>
            @forelse ($movies as $movie)
                <div class="col-6">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $movie->title }} </h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $movie->original_title }}</li>
                            <li class="list-group-item">{{ $movie->nationality }}</li>
                            <li class="list-group-item">{{ $movie->date }}</li>
                            <li class="list-group-item">{{ $movie->vote }}</li>
                        </ul>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <h2>Nessun film disponibile al momento</h2>
                </div>
            @endforelse
        </div>
    </div>

@endsection
