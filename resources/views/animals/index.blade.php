@extends('layouts.app')

@section('page-title', 'Animals')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Animals
                </h1>
            </div>
        </div>
        <div class="row">
            @foreach ($animals as $animal)
            <article class="col-3 p-3">
                <img class="img-fluid" src="{{ $animal->immagine }}" alt="...">
                <h3>
                    {{ $animal->nome }}
                </h3>
                <p>
                    E un : {{ $animal->specie }} - {{ $animal->razza }}
                </p>
                <p>
                    Anni : {{ $animal->eta }}
                </p>
            </article>
            @endforeach
        </div>
    </div>
@endsection
