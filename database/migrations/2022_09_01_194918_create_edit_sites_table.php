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
        Schema::create('edit_sites', function (Blueprint $table) {
            $table->id();
            $table->string('web_phone_number')->unique();
            $table->string('web_phone_whatsapp')->unique();
            $table->string('web_link_whatsapp')->unique();
            $table->string('web_email')->unique();
            $table->string('plans_price_website')->unique();
            $table->string('plans_price_landingpage')->unique();
            $table->string('plans_price_ecommerce')->unique();
            $table->string('plans_price_marketing_digital')->unique();
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
        Schema::dropIfExists('edit_sites');
    }
};
