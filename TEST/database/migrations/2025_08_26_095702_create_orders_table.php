<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // bigint(20) AUTO_INCREMENT primary key
            $table->unsignedBigInteger('provider_id');
            $table->unsignedBigInteger('service_id');
            $table->string('total_time', 100);
            $table->string('earnings', 100);
            $table->enum('status', ['created', 'payed', 'started', 'finished', 'confirmed', 'closed', 'canceled']);
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
        Schema::dropIfExists('orders');
    }
}
