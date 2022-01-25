<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address1');
            $table->string('address2');
            $table->string('tel');
            $table->string('tel2')->nullable();
            $table->string('email');
            $table->string('email2');
            $table->string('longt')->nullable();
            $table->string('lat')->nullable();

            $table->string('facebook_page')->nullable();
            $table->string('instagram_page')->nullable();
            $table->string('linkedin_page')->nullable();
            $table->string('telegram_channel')->nullable();
            $table->string('whatsapp_number')->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
