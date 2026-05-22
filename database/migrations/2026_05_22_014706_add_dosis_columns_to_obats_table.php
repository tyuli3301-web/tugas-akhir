<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::table('obats', function (Blueprint $table) {
            $table->string('formulasi')->nullable()->after('bahan_aktif'); 
        $table->string('dosis')->nullable()->after('formulasi');       
        $table->text('keterangan_takaran')->nullable()->after('dosis');
        });
    }

    
     
     
    public function down(): void
    {
        Schema::table('obats', function (Blueprint $table) {
            
        });
    }
};
