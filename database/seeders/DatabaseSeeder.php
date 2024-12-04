<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

  // дозволяє не виконувати якісь events в моделях передбачених при додавані/оновлені даних
  use WithoutModelEvents;

  public function run(): void
  {
    // --Строрюємо User - користувачів --
    // --варіант 1 
    // User::factory(3)->create();

    // --варіант 2
    // User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
    // --/Строрюємо User - користувачів

    // створюємо 30-Structure и для кожного рандомно від 1 до 3 - Post
    //  Structure::factory(10)
    //  ->has(Unit::factory(rand(1, 3)))
    //  ->create();   
<<<<<<< HEAD



=======
   
>>>>>>> 9e6fdb3e1f597003337ec6a8280fb316035da56d
    $this->call([
      // BrandSeeder::class,
      // DevtypeSeeder::class,
      // DeviceSeeder::class,
<<<<<<< HEAD

=======
      UnitypeSeeder::class,
>>>>>>> 9e6fdb3e1f597003337ec6a8280fb316035da56d
      UnitSeeder::class,
      // PostSeeder::class,
      // StateSeeder::class,
      // WorkerSeeder::class,
      // DocumentSeeder::class,
      // RepairSeeder::class,
      // RepdeviceSeeder::class
    ]);



    // $this->call([
    //   UserSeeder::class,
    //   BrandSeeder::class,
    //   CommentSeeder::class,
    // ]);
  }
}
