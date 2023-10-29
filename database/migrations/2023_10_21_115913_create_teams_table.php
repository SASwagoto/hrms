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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->unsignedBigInteger('leader_id')->nullable();
            $table->unsignedBigInteger('dept_id');
            $table->unsignedBigInteger('zone_id')->nullable();
            $table->boolean('isActive')->default(true);
            $table->timestamps();

            $table->foreign('leader_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('zone_id')->references('id')->on('zones')->onDelete('set null') ;
            $table->foreign('dept_id')->references('id')->on('departments')->onDelete('cascade');
        });

        Schema::create('team_has_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('zone_has_teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('zone_id');
            $table->unsignedBigInteger('team_id');
            $table->timestamps();

            $table->foreign('zone_id')->references('id')->on('zones')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_has_members');
        Schema::dropIfExists('zone_has_teams');
        Schema::dropIfExists('teams');
    }
};
