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
        Schema::create('courses', function (Blueprint $table) {
            $table->Bigincrements('id');
            // $table->integer('storeId');
            $table->foreignId('storeId')
            ->constrained(
                table: 'store', indexName: 'id'
            )
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->String('name');
            $table->integer('price') ->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
