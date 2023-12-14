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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',100);
            $table->string('codice_treno',25);
            $table->string('stazione_di_partenza',50);
            $table->string('stazione_di_arrivo',50);
            $table->dateTime('data_orario_di_partenza');
            $table->dateTime('data_orario_di_arrivo');
            $table->tinyInteger('numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->boolean('in_partenza_oggi')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
