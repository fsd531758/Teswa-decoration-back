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
        Schema::create('experience_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('experience_id');
            $table->string('locale')->index();
            $table->string('title')->nullable();
        
            $table->unique(['experience_id', 'locale']);
            $table->foreign('experience_id')->references('id')->on('experiences')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experience_translations');
    }
};
