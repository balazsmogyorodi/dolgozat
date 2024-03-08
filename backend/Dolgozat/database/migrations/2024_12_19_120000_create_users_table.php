<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('osztaly_id')->references('osztaly_id')->on('osztalies');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name' => 'Balázs',
            'email' => 'balazs@gmail.com',
            'password' => '123abc',
            'osztaly_id' => 1
        ]);
        User::create([
            'name' => 'Laci',
            'email' => 'lac@gmail.com',
            'password' => '123abc',
            'osztaly_id' => 1
        ]);
        User::create([
            'name' => 'Sándor',
            'email' => 'sany@gmail.com',
            'password' => '123abc',
            'osztaly_id' => 2
        ]);
        User::create([
            'name' => 'Piroska',
            'email' => 'piri@gmail.com',
            'password' => '123abc',
            'osztaly_id' => 3
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
