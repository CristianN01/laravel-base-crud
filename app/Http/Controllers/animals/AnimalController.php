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
        return view('animals.index', compact('animal'));
    }
}
