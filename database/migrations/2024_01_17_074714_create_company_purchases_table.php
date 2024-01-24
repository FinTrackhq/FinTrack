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
        Schema::create('company_purchases', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantity');
            $table->float('price');
            $table->float('summary');
            $table->foreignId('warehouse_id')->constrained('company_warehouses')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('plan_account_id')->constrained('plan_accounts')->cascadeOnUpdate();
            $table->foreignId('company_id')->constrained('companies')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_purchases');
    }
};
