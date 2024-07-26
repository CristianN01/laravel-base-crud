<?php

namespace App\Http\Controllers\animals;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', compact('animals'));
    }

    public function show(Animal $animal)
    {
        return view('animals.show', compact('animal'));
    }

    public function create()
    {
        // create new animal
        return view('animals.create');
    }

    public function edit(Animal $animal)
    {
        return view('animals.edit', compact('animal'));
    }

    public function update(Request $request, Animal $animal)
    {
        $data = $request->all();


        $animal->nome = $data ['nome'];
        $animal->specie = $data['specie'];
        $animal->razza = $data['razza'];
        $animal->eta = $data['eta'];
        $animal->sesso = $data['sesso'];
        $animal->peso= $data['peso'];
        $animal->altezza = $data['altezza'];
        $animal->immagine= $data['immagine'];
        $animal->info = $data['info'];

        $animal->update();

        return redirect()->route('animals.show', $animal);
    }

    public function store(Request $request)
    {
        // add a new animal
        $data = $request->all();

        $newAnimal = new Animal($data);
        $newAnimal->nome = $data ['nome'];
        $newAnimal->specie = $data['specie'];
        $newAnimal->razza = $data['razza'];
        $newAnimal->eta = $data['eta'];
        $newAnimal->sesso = $data['sesso'];
        $newAnimal->peso= $data['peso'];
        $newAnimal->altezza = $data['altezza'];
        $newAnimal->immagine= $data['immagine'];
        $newAnimal->info = $data['info'];

        $newAnimal->save();

        return redirect()->route('animals.show', $newAnimal);
    }
}
