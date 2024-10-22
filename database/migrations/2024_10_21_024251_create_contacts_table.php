<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('full_name'); 
            $table->string('email');
            $table->string('phone_number')->nullable();
            $table->string('topic')->nullable(); 
            $table->unsignedBigInteger('contact_reason_id')->nullable();
            $table->text('message'); 
            $table->timestamps();

            $table->foreign('contact_reason_id')->references('id')->on('contact_reasons')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
