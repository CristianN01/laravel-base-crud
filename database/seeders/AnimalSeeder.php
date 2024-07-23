<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $animalsData = [
            [
                "nome" => "Fido",
                "specie" => "Cane",
                "razza" => "Labrador",
                "eta" => 3,
                "sesso" => "Maschio",
                "peso" => 25.5, // peso in kg
                "altezza" => 60, // altezza in cm
                "immagine" => "https://images.unsplash.com/photo-1560807707-8cc77767d783",
                "info" => "Fido è un Labrador molto amichevole e giocherellone. Ama correre nei parchi e giocare con i bambini."
            ],
            [
                "nome" => "Micio",
                "specie" => "Gatto",
                "razza" => "Siamese",
                "eta" => 2,
                "sesso" => "Maschio",
                "peso" => 4.5,
                "altezza" => 30,
                "immagine" => "https://images.unsplash.com/photo-1574158622682-e40e69881006",
                "info" => "Micio è un gatto siamese curioso e affettuoso. Adora esplorare la casa e fare le fusa."
            ],
            [
                "nome" => "Bella",
                "specie" => "Cane",
                "razza" => "Bulldog Francese",
                "eta" => 4,
                "sesso" => "Femmina",
                "peso" => 12.0,
                "altezza" => 35,
                "immagine" => "https://images.unsplash.com/photo-1592194996308-7d72c7a51f05",
                "info" => "Bella è una Bulldog Francese dolce e affettuosa. Le piace rilassarsi e stare in compagnia delle persone."
            ],
            [
                "nome" => "Polly",
                "specie" => "Pappagallo",
                "razza" => "Cenerino",
                "eta" => 5,
                "sesso" => "Femmina",
                "peso" => 0.4, // peso in kg
                "altezza" => 25, // altezza in cm
                "immagine" => "https://images.unsplash.com/photo-1603235085166-43e6406e1399",
                "info" => "Polly è un pappagallo Cenerino molto intelligente. Sa imitare suoni e parole e ama interagire con le persone."
            ],
            [
                "nome" => "Speedy",
                "specie" => "Tartaruga",
                "razza" => "Tartaruga di terra",
                "eta" => 10,
                "sesso" => "Maschio",
                "peso" => 1.2, // peso in kg
                "altezza" => 10, // altezza in cm
                "immagine" => "https://images.unsplash.com/photo-1560807707-8cc77767d783",
                "info" => "Speedy è una tartaruga di terra molto calma e paziente. Ama prendere il sole e mangiare verdure fresche."
            ],
            [
                "nome" => "Rex",
                "specie" => "Cane",
                "razza" => "Pastore Tedesco",
                "eta" => 5,
                "sesso" => "Maschio",
                "peso" => 30.0, // peso in kg
                "altezza" => 65, // altezza in cm
                "immagine" => "https://images.unsplash.com/photo-1560807707-8cc77767d783",
                "info" => "Rex è un Pastore Tedesco molto intelligente e addestrato. È un ottimo cane da guardia e compagno fedele."
            ],
            [
                "nome" => "Whiskers",
                "specie" => "Gatto",
                "razza" => "Maine Coon",
                "eta" => 3,
                "sesso" => "Femmina",
                "peso" => 6.0,
                "altezza" => 40,
                "immagine" => "https://images.unsplash.com/photo-1574158622682-e40e69881006",
                "info" => "Whiskers è una Maine Coon affettuosa e socievole. Ama arrampicarsi e osservare tutto dall'alto."
            ],
            [
                "nome" => "Charlie",
                "specie" => "Cane",
                "razza" => "Beagle",
                "eta" => 4,
                "sesso" => "Maschio",
                "peso" => 10.0,
                "altezza" => 40,
                "immagine" => "https://images.unsplash.com/photo-1592194996308-7d72c7a51f05",
                "info" => "Charlie è un Beagle curioso e attivo. Adora annusare tutto e fare lunghe passeggiate."
            ],
            [
                "nome" => "Kiwi",
                "specie" => "Pappagallo",
                "razza" => "Ara",
                "eta" => 7,
                "sesso" => "Maschio",
                "peso" => 1.0, // peso in kg
                "altezza" => 90, // altezza in cm
                "immagine" => "https://images.unsplash.com/photo-1603235085166-43e6406e1399",
                "info" => "Kiwi è un Ara vivace e colorato. Ama volare liberamente e chiacchierare con le persone."
            ],
            [
                "nome" => "Shelly",
                "specie" => "Tartaruga",
                "razza" => "Tartaruga acquatica",
                "eta" => 8,
                "sesso" => "Femmina",
                "peso" => 1.5, // peso in kg
                "altezza" => 15, // altezza in cm
                "immagine" => "https://images.unsplash.com/photo-1560807707-8cc77767d783",
                "info" => "Shelly è una tartaruga acquatica che ama nuotare e rilassarsi nelle acque tranquille del suo acquario."
            ]
        ];

        foreach ($animalsData as $animalData) {
            $newAnimal = new Animal($animalData);
            $newAnimal->nome = $animalData['nome'];
            $newAnimal->specie = $animalData['specie'];
            $newAnimal->razza = $animalData['razza'];
            $newAnimal->eta = $animalData['eta'];
            $newAnimal->sesso = $animalData['sesso'];
            $newAnimal->peso= $animalData['peso'];
            $newAnimal->altezza = $animalData['altezza'];
            $newAnimal->immagine= $animalData['immagine'];
            $newAnimal->info = $animalData['info'];
            $newAnimal->save();
        }
    }
}
