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

            $table->integer("CardCode")->comment("CardCode");
            $table->integer("DocNum")->comment("Document Number ");
            $table->string("CardName",50)->comment("CardName");
            $table->integer("CntctCode")->comment("	Contact Person ");
            $table->date('Docdate')->comment("Document Date ");
            $table->date('DocDueDate')->comment("Due Date");
            $table->date('TaxDate')->comment("Release Date");
            $table->integer("NumAtCard")->comment("BP Reference No.");
            $table->enum('CurSource', ['C', 'L','S'])->nullable()->comment('Fixed Item');
            $table->integer("SlpCode")->comment("Sales Employee");
            $table->integer("OwnerCode")->comment("Document Owner");
            $table->text('Comments')->nullable()->comment('Item Remarks');

        
            
          
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
