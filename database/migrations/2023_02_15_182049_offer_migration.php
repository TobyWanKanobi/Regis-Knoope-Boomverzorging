<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OfferMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id("offer_id");
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email', 64);
            $table->string('phone_number', 64);
            $table->string('street');
            $table->string('house_number');
            $table->string('street_addition')->nullable();
            $table->string('city');
            $table->string('zip_code');
            $table->text('task_description');
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('offers');
    }
}
