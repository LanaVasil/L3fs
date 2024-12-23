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
    User::factory(50)->create();

    // --варіант 2
    // User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
    // --/Строрюємо User - користувачів

    // створюємо 15-UnitType и для кожного рандомно від 5 до 10 - Post
    // UnitType::factory(15)
    //   ->has(Unit::factory(rand(5,10)))
    //   ->create(); 
    // }
    // Unit::factory(50)
    // ->create(); 
    // }   


    $this->call([
      BrandSeeder::class,
      DevTypeSeeder::class,
      DeviceSeeder::class,
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
