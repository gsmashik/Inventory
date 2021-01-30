<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordr', function (Blueprint $table) {
            $table->bigIncrements('DocEntry')->autoIncrement();
            // 1st Row
            $table->string("ItemCode",50)->comment("Item No.");
            $table->mediumText('ItemName',100)->comment("Item Description");
            $table->decimal('qty',19,6)->nullable()->comment("Qty");
            
          
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
        Schema::dropIfExists('ordr');
    }
}
