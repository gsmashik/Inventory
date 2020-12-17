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
            $table->bigIncrements('DocEntry')->autoIncrement();
            $table->string("ItemCode",50)->comment("Item No.");
            $table->mediumText('ItemName',100)->comment("Item Description");
            $table->mediumText('FrgnName',100)->comment("Foreign Name");
            $table->string('CodeBars',255)->comment('Bar Code');
            $table->mediumInteger('ItemType')->comment("Item Type");
            $table->mediumInteger('ItmsGrpCod')->comment("Item Group");
            $table->mediumInteger('CstGrpCode')->comment("Customs Group");
            $table->char('VATLiable',1)->comment('Tax Liable');
            $table->char('PrchseItem',1)->comment('Purchase Item');
            $table->char('SellItem',1)->comment('Sales Item');
            $table->char('InvntItem',1)->comment('Inventory Item');
            $table->char('AssetItem',1)->comment('Fixed Item');
            $table->decimal('OnHand',19,6)->comment("In Stock");
            $table->decimal('IsCommited',19,6)->comment("Qty Ordered by Customers");
            $table->decimal('OnOrder',19,6)->comment("Qty Ordered from Vendors");
            $table->decimal('MaxLevel',19,6)->comment("Maximum Inventory Level");
            $table->decimal('MinOrdrQty',19,6)->comment("Minimum Order Quantity");
            $table->string('DfltWH',8)->comment('Default Warehouse');
            $table->string('FirmCode',8)->comment('Manufacturar');
            $table->string('ShipType',8)->comment('Shipping Type');
            $table->string('SWW',8)->comment('Additional Identifier');
            $table->string('validFor',8)->comment('Active');
            $table->string('Inactive',8)->comment('InActive');
            $table->string('CardCode',8)->comment('Preferred Vendor');
            $table->string('prclength',8)->comment('Purchase Length');
            $table->string('prcwidth',8)->comment('Purchase Width');
            $table->string('prcheight',8)->comment('Purchase Height');
            $table->mediumInteger('PurPackUn')->comment('Quantity per Package (Purchasing)');
            $table->mediumInteger('BVolume')->comment('	Volume - Purchasing Unit');
            $table->string('SuppCatNum',8)->comment('Mfr Catalog No.');
            $table->string('BuyUnitMsr',50)->comment('Purchasing UoM');
            $table->string('InvntryUom',50)->comment('Inventory UoM');
            $table->decimal('NumInBuy',19,6)->comment("No. of Items per Purchase Unit");
            $table->decimal('ReorderQty',19,6)->comment("Required (Purchasing UoM)");
            $table->decimal('MinLevel',19,6)->comment("Minimum Inventory Level");
            $table->decimal('LstEvlPric',19,6)->comment("Date of Last Reval. Price");
            $table->date('LstEvlDate')->comment("Date of Last Reval. Price");
            $table->decimal('CustomPer',19,6)->comment("Customs Rate");
            $table->char('Canceled',1)->comment('Canceled Item [Yes/No]');
            $table->mediumInteger('MnufctTime')->comment("Production Date in Days");
            $table->mediumText('SalUnitMsr')->comment("Sales UoM");
            $table->mediumInteger('UserSign')->comment('User Signature');
            $table->mediumInteger('UserSign2')->comment('Updating User');
            $table->mediumText('PicturName')->comment('Picture');
            $table->text('UserText')->comment('Item Remarks');
            $table->string("TaxCodeAR",50)->comment("Tax Code (A/R)");
            $table->string("TaxCodeAP",50)->comment("Tax Code (A/P)");
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
        Schema::dropIfExists('items');
    }
}
