@extends('layouts.app')

@section('page-title',)
        {{ $animal->nome }}
@endsection

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <article class="col-6 p-1 text-center my_hover flex-wrap ">
                <img class="img-fluid" src="{{ $animal->immagine }}" alt="...">
                <h3>
                    {{ $animal->nome }}
                </h3>
                <p>
                    E un : {{ $animal->specie }} - {{ $animal->razza }}
                </p>
                <p>
                    Anni : {{ $animal->eta }} - {{ $animal->sesso }}
                </p>
                <p>
                    Peso : {{ $animal->peso }} Kg - Alto : {{ $animal->altezza }} cm
                </p>
                <a href="{{ route('animals.index', $animal) }}" class="btn btn-secondary" >Animali</a>
                <a href="{{ route('animals.edit', $animal) }}" class="btn btn-success" >Modifica</a>
        </div>
    </div>
@endsection
