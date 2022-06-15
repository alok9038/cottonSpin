<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_links', function (Blueprint $table) {
            $table->id();
            $table->string('facebook')->default('#')->nullable();
            $table->boolean('f_status')->default(1);
            $table->string('twitter')->default('#')->nullable();
            $table->boolean('t_status')->default(1);
            $table->string('instagram')->default('#')->nullable();
            $table->boolean('i_status')->default(1);
            $table->string('behance')->default('#')->nullable();
            $table->boolean('b_status')->default(1);
            $table->string('dribble')->default('#')->nullable();
            $table->boolean('d_status')->default(1);
            $table->string('youtube')->default('#')->nullable();
            $table->boolean('y_status')->default(1);
            $table->string('linkedin')->default('#')->nullable();
            $table->boolean('l_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_links');
    }
};
