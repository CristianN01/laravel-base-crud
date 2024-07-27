@extends('layouts.app')

@section('page-title', 'Animals')

@section('main-content')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h1>
                    Animals
                </h1>
            </div>
        </div>
        <div class="row ">
            @foreach ($animals as $animal)
                <article class="col-3 p-1 text-center my_hover flex-wrap">
                    <img class="img-fluid" src="{{ $animal->immagine }}" alt="...">
                    <h3>
                        {{ $animal->nome }}
                    </h3>
                    <a href="{{ route('animals.show', $animal) }}" class="btn btn-secondary" >Dettagli animale</a>
                    <a href="{{ route('animals.edit', $animal) }}" class="btn btn-success" >Modifica</a>
                    <form action="{{ route('animals.destroy', $animal) }}" method="POST" class="d-inline-block " >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning" >Elimina</button>
                    </form>



                </article>
            @endforeach
        </div>
    </div>
@endsection
