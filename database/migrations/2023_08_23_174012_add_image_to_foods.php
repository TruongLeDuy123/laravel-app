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
        Schema::table('foods', function (Blueprint $table) {
            $table->string('image_path');
        });
    }

    /**
     * Reverse the migrations.
     */
    // down function: rollback migrate: tra ve trang thai hien truong trc khi vao hàm up
    public function down(): void
    {
        Schema::table('foods', function (Blueprint $table) {
            $table->dropColumn('image_path');
            
        });
    }
};
