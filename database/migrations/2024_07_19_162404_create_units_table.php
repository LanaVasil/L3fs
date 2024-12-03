<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Unitype;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {

    Schema::create('unit_types', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->softDeletes();
      $table->string('name', 32)->unique()->nullable();
      $table->boolean('status')->default(true);
      $table->tinyInteger('sort')->unsigned()->default(99);
    });    

    
    Schema::create('units', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->softDeletes();
      $table->string('name_full', 255)->nullable();
      $table->string('name', 32)->unique()->nullable();
      $table->tinyInteger('sort')->unsigned()->default(99);
      $table->bigInteger('parent_id')->unsigned()->default(0);
      $table->bigInteger('unit_type_id')->unsigned()->default(0);
      $table->boolean('status')->default(true);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    if (app()->isLocal()) {
      Schema::dropIfExists('units');
      Schema::dropIfExists('unit_types');
    }
  }
};