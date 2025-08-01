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
    Schema::table('lecturers', function (Blueprint $table) {
        $table->unsignedBigInteger('faculty_id')->after('id'); // adjust position as needed
        $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lecturers', function (Blueprint $table) {
            //
        });
    }
};
