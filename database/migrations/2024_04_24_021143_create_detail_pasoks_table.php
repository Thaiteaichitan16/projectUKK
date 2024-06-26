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
        Schema::create('detail_pasoks', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->integer('id_pasok');
            $table->integer('id_buku');
            $table->tinyInteger('jumlah');
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('detail_pasoks');
    }
};
