<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sender_name_surname', 255);
            $table->string('sender_email', 255);
            $table->string('sender_phone_number', 255);
            $table->string('subject', 255);
            $table->text('message');
            $table->string('created_ip', 15);
            $table->boolean('is_answered')->default(false);
            $table->timestamps();
            $table->string('lang', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
