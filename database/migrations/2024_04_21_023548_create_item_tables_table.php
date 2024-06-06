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
        Schema::create('item_tables', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->float('price');
            $table->string('description');
            $table->string('added_date');
            $table->string('image');
            $table->string('url');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_tables');
    }
};
