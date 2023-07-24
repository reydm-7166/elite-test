<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->foreignId('crew_id')->nullable();
            $table->string('name');
            $table->integer('number');
            $table->dateTime('date_issued');
            $table->dateTime('date_expiry');
            $table->string('remarks');
            $table->timestamps();

            $table->foreign('crew_id')
                ->references('id')
                ->on('crews')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
