<?php
// database/seeders/CarSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car; // Assure-toi que le modèle Car est correctement importé

class CarSeeder extends Seeder
{
    public function run()
    {
        // Exemple de création de plusieurs enregistrements
        Car::create([
            'constructor' => 'Toyota',
            'model' => 'Corolla',
        ]);

        Car::create([
            'constructor' => 'Honda',
            'model' => 'Civic',
        ]);

        // Ajoute d'autres enregistrements si nécessaire
    }
}
