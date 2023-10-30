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
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('company');
            $table->string('location')->nullable();
            $table->text('key_responsibilities')->nullable();
            $table->text('educational_qualifications')->nullable();
            $table->string('salary_range')->nullable();
            $table->string('unique_tracking_number')->unique();
            $table->text('how_to_apply')->nullable();
            $table->string('position')->nullable();
            $table->text('preferred_skills')->nullable();
            $table->string('benefits')->nullable();
            $table->date('application_deadline')->nullable();
            $table->string('requisition_number')->nullable();
            $table->text('about_us')->nullable();
            $table->string('department')->nullable();
            $table->text('requirements')->nullable();
            $table->string('experience')->nullable();
            $table->string('contact_information')->nullable();
            $table->string('file_path')->nullable();
            $table->boolean('isActive')->default(true);
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('approved_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_postings');
    }
};
