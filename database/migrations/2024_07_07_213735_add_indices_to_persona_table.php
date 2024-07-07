<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('persona', function (Blueprint $table) {
            $table->index('cPerApellido');
            $table->index('cPerNombre');
        });
    }
    
    public function down()
    {
        Schema::table('persona', function (Blueprint $table) {
            $table->dropIndex(['cPerApellido']);
            $table->dropIndex(['cPerNombre']);
        });
    }
};
