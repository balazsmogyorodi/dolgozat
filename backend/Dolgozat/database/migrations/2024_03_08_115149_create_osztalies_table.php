<?php

use App\Models\Osztaly;

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
        Schema::create('osztalies', function (Blueprint $table) {
            $table->id('osztaly_id');
            $table->integer('hanyadik');
            $table->timestamps();
        });



        Osztaly::create(['hanyadik' => 1]);
        Osztaly::create(['hanyadik' => 2]);
        Osztaly::create(['hanyadik' => 3]);


    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('osztalies');
    }
};
