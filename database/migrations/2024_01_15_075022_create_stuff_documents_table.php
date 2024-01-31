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
        Schema::create('stuff_documents', function (Blueprint $table) {
            $table->id();
            $table->integer('passport_series');
            $table->integer('passport_number')->unique();
            $table->string('passport_issued');
            $table->date('passport_date');
            $table->string('snils')->unique();
            $table->foreignId('company_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('stuff_id')->constrained('company_stuffs')->cascadeOnDelete()->cascadeOnUpdate();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stuff_documents');
    }
};
