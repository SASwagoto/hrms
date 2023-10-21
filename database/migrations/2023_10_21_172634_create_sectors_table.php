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
        Schema::create('sectors', function (Blueprint $table) {
            $table->id();
            $table->string('sector_name');
            $table->unsignedBigInteger('sector_leader')->nullable();
            $table->boolean('isActive')->default(true);
            $table->timestamps();

            $table->foreign('sector_leader')->references('id')->on('users')->onDelete('set null');
        });

        Schema::create('sector_has_teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sector_id');
            $table->unsignedBigInteger('team_id');

            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sectors');
        Schema::dropIfExists('sector_has_teams');
    }
};
