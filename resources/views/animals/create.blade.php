@extends('layouts.app')

@section('page-title', 'Crea il tuo Animale')

@section('main-content')

    <section class="form">
        <form action="{{ route('animals.store') }}" method="POST">
            @csrf

            <div>
                <label for="nome">Nome</label>
                <input class="form-control" type="text" id="nome" name="nome">
            </div>

            <div>
                <label for="specie">Specie</label>
                <input class="form-control" type="text" id="specie" name="specie">
            </div>
            <div>
                <label for="razza">Razza</label>
                <input class="form-control" type="text" id="razza" name="razza">
            </div>
            <div>
                <label for="eta">Et&agrave;</label>
                <input class="form-control" type="text" id="eta" name="eta">
            </div>
            <div>
                <label for="sesso">Sesso</label>
                <input class="form-control" type="text" id="sesso" name="sesso">
            </div>
            <div>
                <label for="peso">Peso (kg)</label>
                <input class="form-control" type="text" id="peso" name="peso">
            </div>
            <div>
                <label for="altezza">Altezza (cm)</label>
                <input class="form-control" type="text" id="altezza" name="altezza">
            </div>
            <div>
                <label for="immagine">Url Immagine</label>
                <input class="form-control" type="text" id="immagine" name="immagine">
            </div>
            <div>
                <label for="info">Extra Info</label>
                <input class="form-control" type="text" id="info" name="info">
            </div>

            <button class="btn btn-secondary" type="submit">Send</button>
        </form>
    </section>

@endsection
