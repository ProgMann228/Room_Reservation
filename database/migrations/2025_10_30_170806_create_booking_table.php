<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id');
            $table->string("user_name");
            $table->date("date");
            $table->time("start_time");
            $table->time("end_time");
            $table->string("purpose");
            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('room')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
