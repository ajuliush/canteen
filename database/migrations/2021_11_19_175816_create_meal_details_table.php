<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meal_id')->nullable()->constrained('meals')->onDelete('cascade');
            $table->string('token')->unique()->nullable();
            $table->enum('type',['Breakfast','Lunch','Dinner']);
            $table->enum('status',['Cancel','Consume','Pending','Miss'])->default('Pending');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_details');
    }
}
