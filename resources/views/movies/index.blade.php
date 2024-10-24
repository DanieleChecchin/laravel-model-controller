@extends('layouts.app')

@section('page-title', 'Movies Index')

@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center my-5 fst-italic text-decoration-underline">
                    Movies Index
                </h1>
            </div>
            @forelse ($movies as $movie)
                <div class="col-6">
                    <div class="card my-3 shadow-lg bg-white border">
                        <div class="card-body p-3 bg-dark text-white">
                            <h5 class="card-title"> {{ $movie->title }} </h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-info-subtle text-info-emphasis"> Titolo originale:
                                {{ $movie->original_title }}</li>
                            <li class="list-group-item"> Nazionalità. {{ $movie->nationality }}</li>
                            <li class="list-group-item bg-info-subtle text-info-emphasis"> Data di uscita:
                                {{ $movie->date }}</li>
                            <li class="list-group-item"> Voto: {{ $movie->vote }}</li>
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
