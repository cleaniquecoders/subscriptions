<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); // for reference in administration
            $table->string('label')->nullable(); // this is for like PRO, BUSINESS, PREMIUM
            $table->tinyInteger('status')->default(0); // 0 for inactive, 1 for active
            $table->tinyInteger('type')->default(1); // 0 for monthly, 1 for yearly
            $table->tinyInteger('duration')->unsigned()->default(6); // number of months
            $table->float('price')->default(0.00); // default is free
            $table->text('details')->nullable(); // any details you want to put
            $table->text('meta')->nullable(); // any data, stored in json format
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
        Schema::dropIfExists('subscriptions');
    }
}
