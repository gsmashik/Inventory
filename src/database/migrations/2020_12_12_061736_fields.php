<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemsfields', function (Blueprint $table) {
            $table->id();
            $table->mediumInteger('Column');
            $table->string('Field',40);
            $table->mediumText('Description');
            $table->string('SQLType',10);
            $table->mediumInteger('Length');
            $table->mediumInteger('Decimals');
            $table->string('Relation');
            $table->string('DefaultValue');
            $table->enum('Nullable', ['Y', 'N']);
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
        Schema::dropIfExists('itemsfields');
    }
}
