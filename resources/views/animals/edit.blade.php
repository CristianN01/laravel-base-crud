@extends('layouts.app')

@section('page-title',)
        {{ $animal->nome }}
@endsection

@section('main-content')

    <section class="form">
        <form action="{{ route('animals.update', $animal) }}" method="POST">
            @method('PUT')
            @csrf

            <div>
                <label for="nome">Nome</label>
                <input  class="form-control" type="text" id="nome" name="nome" value="{{ $animal->nome }}">
            </div>

            <div>
                <label for="specie">Specie</label>
                <input class="form-control" type="text" id="specie" name="specie" value="{{ $animal->specie }}">
            </div>
            <div>
                <label for="razza">Razza</label>
                <input class="form-control" type="text" id="razza" name="razza" value="{{ $animal->razza }}">
            </div>
            <div>
                <label for="eta">Et&agrave;</label>
                <input class="form-control" type="text" id="eta" name="eta" value="{{ $animal->eta }}">
            </div>
            <div>
                <label for="sesso">Sesso</label>
                <input class="form-control" type="text" id="sesso" name="sesso" value="{{ $animal->sesso }}">
            </div>
            <div>
                <label for="peso">Peso (kg)</label>
                <input class="form-control" type="text" id="peso" name="peso" value="{{ $animal->peso }}">
            </div>
            <div>
                <label for="altezza">Altezza (cm)</label>
                <input class="form-control" type="text" id="altezza" name="altezza" value="{{ $animal->altezza }}">
            </div>
            <div>
                <label for="immagine">Url Immagine</label>
                <input class="form-control" type="text" id="immagine" name="immagine" value="{{ $animal->immagine }}">
            </div>
            <div>
                <label for="info">Extra Info</label>
                <input class="form-control" type="text" id="info" name="info" value="{{ $animal->info }}">
            </div>

            <button class="btn btn-secondary" type="submit">Modifica {{ $animal->nome }}</button>
        </form>
    </section>

@endsection
