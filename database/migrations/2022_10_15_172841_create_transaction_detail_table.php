

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactiondetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_detail', function (Blueprint $table) {
            $table->string('document_code', 3);
            $table->string('document_number', 10);
            $table->string('product_code', 18);
            $table->integer('price');
            $table->integer('quantity');
            $table->string('unit', 5);
            $table->integer('subtotal');
            $table->string('currency', 5);
            $table->integer('id_transaction_header');
            $table->increments('id');
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
        Schema::dropIfExists('transaction_detail');
    }
}

