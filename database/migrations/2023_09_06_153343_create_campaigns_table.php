<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('campaigns', static function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('order');
            $table->string('type')->default('regular');
            $table->string('status')->default('inactive');
            $table->date('start_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
