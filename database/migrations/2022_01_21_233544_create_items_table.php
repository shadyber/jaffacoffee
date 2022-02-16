<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->longText('detail');
            $table->double('price');
            $table->string('thumb');
            $table->string('photo');

            $table->bigInteger('item_origion_id')->unsigned();
            $table->bigInteger('item_size_id')->unsigned();
            $table->bigInteger('item_roast_type_id')->unsigned();
            $table->integer('stock_beginning_balance')->default(1);
            $table->bigInteger('user_id')->unsigned();
            $table->string('badge')->nullable();
            $table->string('weight')->nullable();
            $table->string('tags')->nullable();
            $table->bigInteger('visit')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
