<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->boolean('status');
            $table->integer('phone_Number');
            $table->string('delivery_address');
            $table->integer('user_id');
            $table->integer('total_amount')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('phone_Number');
            $table->dropColumn('delivery_address');
            $table->dropColumn('user_id');
            $table->dropColumn('total_amount');
        });
    }
}
