<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->timestamps();
			$table->integer('user_id');
			$table->text('cart');
			$table->text('address');
			$table->string('name');
			$table->integer('status');//0sa iptal request 1 ise approved 3 ise silinmiş order geçerli deil 
			$table->string('payment_id');//0sa stok duzeltilmis 1se stok duzeltilmemiş
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
