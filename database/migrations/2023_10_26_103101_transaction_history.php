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
        Schema::create("transaction_history", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("trans_id")->unique;
            $table->unsignedBigInteger("acc_id");
            $table->unsignedBigInteger("income_id")->nullable();
            $table->unsignedBigInteger("expense_id")->nullable();
            $table->enum('type', ['income', 'expense']);
            $table->double('amount', 10, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_history');
    }
};
