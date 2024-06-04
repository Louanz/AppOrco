<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Module;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => bcrypt('test'),
        ]);

        $module1 = Module::factory()->create([
            "id" => 1,
            "title" => "Licence securisee",
        ]);

        Product::factory()->create([
            'name' => 'ROBOTS, SITMAPS, FLUX RSS',
            'price' => '30',
            'module_id' => $module1->id,
        ]);
        Product::factory()->create([
            'name' => 'SOUMISSION MOTEURS ET ANNUAIRES',
            'price' => '20',
            'module_id' => $module1->id,
        ]);

        Product::factory()->create([
            'name' => 'GESTION PAR PAGES SEO AVANCÉ',
            'price' => '20',
            'module_id' => $module1->id,
        ]);
        Product::factory()->create([
            'name' => 'AUTOPUBLICATION FACEBOOK',
            'price' => '10',
            'module_id' => $module1->id,
        ]);

        $module2 = Module::factory()->create([
            "id" => 2,
            "title" => "Hebergement",
        ]);
        Product::factory()->create([
            'name' => 'ADMINISTRATION RÉSEAUX PAR NOS SOINS',
            'price' => '20',
            'module_id' => $module2->id,
        ]);
        Product::factory()->create([
            'name' => 'GESTION DE DNS',
            'price' => '15',
            'module_id' => $module2->id,
        ]);
        Product::factory()->create([
            'name' => 'NOM DE DOMAINE .FR',
            'price' => '40',
            'module_id' => $module2->id,
        ]);

        $module3 = Module::factory()->create([
            "id" => 3,
            "title" => "Integration / Reparation",
        ]);

        Product::factory()->create([
            'name' => 'RÉPARATION DU SQUELETTE DU SITE',
            'price' => '10',
            'module_id' => $module3->id,
        ]);
        Product::factory()->create([
            'name' => 'RÉPARATION DU DESIGN REPONSIVE',
            'price' => '10',
            'module_id' => $module3->id,
        ]);

        $module4 = Module::factory()->create([
            "id" => 4,
            "title" => "Webmaster / Assistance",
        ]);
        Product::factory()->create([
            'name' => 'SUIVI RÉCURRENT',
            'price' => '30',
            'module_id' => $module4->id,
        ]);
        Product::factory()->create([
            'name' => 'MISE À JOUR CMS + MODULES',
            'price' => '15',
            'module_id' => $module4->id,
        ]);
        Product::factory()->create([
            'name' => 'SUPPORT, GESTION ADMINISTRATIVE',
            'price' => '30',
            'module_id' => $module4->id,
        ]);
        Product::factory()->create([
            'name' => 'MODIFICATION DU CONTENU SUR DEMANDE',
            'price' => '15',
            'module_id' => $module4->id,
        ]);
    }
}
