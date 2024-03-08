<?php

use App\Models\Tevekenysegek;
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
        Schema::create('tevekenysegeks', function (Blueprint $table) {
            $table->id('tevekenyseg_id');
            $table->string('tevekenyseg_nev');
            $table->integer('pontszam');
            $table->timestamps();
        });


        Tevekenysegek::create([
            'tevekenyseg_nev' => '10 km-t gyalogoltam buszozás helyett ',
            'pontszam' => 5
        ]);
        Tevekenysegek::create([
            'tevekenyseg_nev' => 'ültettem fát',
            'pontszam' => 4
        ]);
        Tevekenysegek::create([
            'tevekenyseg_nev' => 'ültettem virágot',
            'pontszam' => 3
        ]);



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegeks');
    }
};
