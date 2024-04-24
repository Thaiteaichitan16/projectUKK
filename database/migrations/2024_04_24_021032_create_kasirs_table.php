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
        Schema::create('kasirs', function (Blueprint $table) {
            $table->bigInteger('id_kasir');
            $table->string('nama',100);
            $table->string('alamat',100);
            $table->string('telepon',13);
            $table->string('username',100);
            $table->string('password',255);
            $table->enum('akses',['Admin','Kasir']);
            $table->timestamps();
            $table->primary('id_kasir');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('kasirs');
    }
};
