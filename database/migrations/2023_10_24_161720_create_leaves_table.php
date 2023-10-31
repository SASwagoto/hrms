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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('type');
            $table->string('comments')->nullable();
            $table->integer('days')->nullable();
            $table->boolean('isActive')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('leave_request', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('leave_id');
            $table->string('reason');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('days')->nullable();
            $table->integer('status')->default(0);
            $table->unsignedBigInteger('approvedBy')->nullable();
            $table->unsignedBigInteger('next_approvedBy')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('next_approved_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('leave_id')->references('id')->on('leaves')->onDelete('cascade');
            $table->foreign('approvedBy')->references('id')->on('users')->onDelete('set null');
            $table->foreign('next_approvedBy')->references('id')->on('')->on('users')->onDelete('set null');
        });

        Schema::create('leave_balance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('leave_id');
            $table->integer('current_balance')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('leave_id')->references('id')->on('leaves')->onDelete('cascade');
        });

        Schema::create('leave_policy', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('leave_id');
            $table->text('policy')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('leave_id')->references('id')->on('leaves')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_request');
        Schema::dropIfExists('leave_balance');
        Schema::dropIfExists('leave_policy');
        Schema::dropIfExists('leaves');
    }
};
