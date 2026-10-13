<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations for Naafein International Academy (NIA).
     */
    public function up(): void
    {
        // 1. Roles & Permissions
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_name');
            $table->string('slug')->unique();
            $table->json('permissions')->nullable();
            $table->timestamps();
        });

        // 2. Users (Authentication)
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->nullable()->constrained('roles')->nullOnDelete();
            $table->string('username')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('password');
            $table->string('user_type')->default('student'); // admin, teacher, student, guardian
            $table->boolean('is_active')->default(true);
            $table->timestamp('last_login_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        // 3. Academic Structure
        Schema::create('academic_years', function (Blueprint $table) {
            $table->id();
            $table->string('session_title'); // 2025-2026
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('is_current')->default(false);
            $table->timestamps();
        });

        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('academic_year_id')->constrained('academic_years')->cascadeOnDelete();
            $table->string('name'); // EY, PYP, MYP, HYP, Hifz
            $table->string('class_numeric_level')->nullable();
            $table->string('stream_type')->default('General');
            $table->timestamps();
        });

        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_id')->constrained('classes')->cascadeOnDelete();
            $table->string('section_name'); // A, B, Boys, Girls
            $table->integer('max_capacity')->default(30);
            $table->string('room_no')->nullable();
            $table->timestamps();
        });

        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subject_code')->unique();
            $table->string('subject_title');
            $table->string('subject_type')->default('Core');
            $table->timestamps();
        });

        // 4. Staff & Faculty
        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->string('designation_title');
            $table->integer('hierarchy_order')->default(0);
            $table->timestamps();
        });

        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('designation_id')->nullable()->constrained('designations')->nullOnDelete();
            $table->string('employee_code')->unique();
            $table->string('name');
            $table->string('gender')->default('male');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('highest_qualification')->nullable();
            $table->string('photo')->nullable();
            $table->string('designation_title')->nullable();
            $table->string('staff_category')->default('teaching'); // teaching, non_teaching, governing_body
            $table->date('date_of_joining')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 5. Students & Admissions
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('primary_phone');
            $table->string('occupation')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
        });

        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('guardian_id')->nullable()->constrained('guardians')->nullOnDelete();
            $table->foreignId('class_id')->constrained('classes')->cascadeOnDelete();
            $table->foreignId('section_id')->nullable()->constrained('sections')->nullOnDelete();
            $table->string('student_id_card')->unique();
            $table->string('roll_no')->nullable();
            $table->string('full_name');
            $table->date('dob')->nullable();
            $table->string('gender')->default('male');
            $table->string('blood_group')->nullable();
            $table->string('photo_url')->nullable();
            $table->date('admission_date')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        Schema::create('admission_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_id')->nullable()->constrained('classes')->nullOnDelete();
            $table->string('application_no')->unique();
            $table->string('student_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('blood_group')->nullable();
            $table->string('guardian_name');
            $table->string('guardian_phone');
            $table->string('guardian_email')->nullable();
            $table->text('address')->nullable();
            $table->string('previous_school')->nullable();
            $table->string('payment_status')->default('unpaid');
            $table->string('application_status')->default('pending');
            $table->string('documents_path')->nullable();
            $table->timestamp('applied_at')->useCurrent();
            $table->timestamps();
        });

        // 6. Notices & Settings
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content')->nullable();
            $table->string('attachment_url')->nullable();
            $table->date('publish_date')->nullable();
            $table->boolean('is_pinned')->default(false);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('school_name')->default('NAAFEIN INTERNATIONAL ACADEMY');
            $table->string('eiin_no')->default('310010467');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('playstore_app_url')->nullable();
            $table->text('chairman_message')->nullable();
            $table->text('principal_message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
        Schema::dropIfExists('notices');
        Schema::dropIfExists('admission_applications');
        Schema::dropIfExists('students');
        Schema::dropIfExists('guardians');
        Schema::dropIfExists('employees');
        Schema::dropIfExists('designations');
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('sections');
        Schema::dropIfExists('classes');
        Schema::dropIfExists('academic_years');
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
    }
};
