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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('username', 20)->unique();
            $table->string('employee_id', 15)->unique();
            $table->string('phone_number', 20)->unique();
            $table->date('dob')->nullable();
            $table->string('marital_status', 20)->nullable();
            $table->string('blood_group', 3)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('religion', 20)->nullable();
            $table->string('nid', 20)->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->unsignedBigInteger('dept_id')->nullable();
            $table->unsignedBigInteger('position_id')->nullable();
            $table->string('profile_img')->nullable();
            $table->date('join_date')->default(now());
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('dept_id')->references('id')->on('departments')->onDelete('set null');
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
