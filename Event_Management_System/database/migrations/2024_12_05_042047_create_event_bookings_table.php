<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('event_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('event_name');
            $table->string('user_name');
            $table->string('email');
            $table->string('phone');
            $table->date('booking_date');
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_bookings');
    }
}
