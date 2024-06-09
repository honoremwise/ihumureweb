<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('user_role');
            $table->string('password');
            $table->timestamps();
        });
        DB::table("users")->insert([
            "name" => ENV('ADMIN_NAME'),
            "password"=>Hash::make(ENV('ADMIN_PASSWORD')),
            "email" =>ENV('ADMIN_EMAIL'),
            "user_role" => ENV('ADMIN_ROLE_NAME'),
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
