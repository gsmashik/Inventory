<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RDR1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RDR1', function (Blueprint $table) {
            $table->bigIncrements('DocEntry')->autoIncrement();
            $table->integer("LineNum")->comment("Row Number");
            $table->string("ItemCode",50)->comment("Item No.");
            $table->mediumText('Dscription',100)->comment("Item/Service Description");
            $table->decimal('Quantity',19,6)->nullable()->comment("Quantity");
            $table->decimal('Price',19,6)->nullable()->comment("Unit Price");
            $table->decimal('DiscPrcnt',19,6)->nullable()->comment("Discount % per Row");
            $table->decimal('VatPrcnt',19,6)->nullable()->comment("Tax Rate per Row");
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
        Schema::dropIfExists('RDR1');
    }
}
