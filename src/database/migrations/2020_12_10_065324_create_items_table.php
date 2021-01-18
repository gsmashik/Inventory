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
            // 1st Row
            $table->string("ItemCode",50)->comment("Item No.");
            $table->string('CodeBars',255)->nullable()->comment('Bar Code');
            $table->enum('InvntItem', ['Y', 'N'])->nullable()->comment('Inventory Item');
            
            //2nd Row
            $table->mediumText('ItemName',100)->comment("Item Description");
            $table->mediumInteger('ItmsGrpCod')->nullable()->comment("Item Group");
            $table->enum('SellItem', ['Y', 'N'])->nullable()->comment('Sales Item');
          

            // 3rd Row
            $table->mediumText('FrgnName',100)->nullable()->comment("Foreign Name");
            $table->mediumInteger('ItemType')->nullable()->comment("Item Type");
            $table->enum('PrchseItem', ['Y', 'N'])->nullable()->comment('Purchase Item');
           
            // 4th Row
            $table->enum('AssetItem', ['Y', 'N'])->nullable()->comment('Fixed Item');


            // General Tab 
            $table->mediumInteger('FirmCode')->nullable()->comment("Manufacturer");
            $table->string('ShipType',8)->nullable()->comment('Shipping Type');
            $table->enum('Inactive',['Y', 'N'])->nullable()->comment('InActive');
            $table->string('SWW',8)->nullable()->comment('Additional Identifier');
            $table->string('TaxType',8)->nullable()->default('')->comment('Tax Type');
            $table->enum('validFor',['Y', 'N'])->nullable()->comment('Active');


            // Purchase Tab
            $table->string('CardCode',8)->nullable()->comment('Preferred Vendor');
            $table->string('prclength',8)->nullable()->comment('Purchase Length');
            $table->string('SuppCatNum',8)->nullable()->comment('Mfr Catalog No.');
            $table->string('prcwidth',8)->nullable()->comment('Purchase Width');
            $table->string('BuyUnitMsr',50)->nullable()->nullable()->comment('Purchasing UoM');
            $table->string('prcheight',8)->nullable()->comment('Purchase Height');   
            $table->mediumInteger('PurPackUn')->nullable()->comment('Quantity per Package (Purchasing)');
            $table->mediumInteger('BVolume')->nullable()->comment('	Volume - Purchasing Unit'); 
            $table->mediumInteger('CstGrpCode')->nullable()->comment("Customs Group");
            $table->mediumInteger('BWeight')->nullable()->comment('Weight Purchasing '); 



            // Sales Tab
            $table->string('SelUnitMsr',50)->nullable()->comment('Sales UoM');
            $table->string('Sellength',8)->nullable()->comment('Sales Length');
        
            $table->string('Selwidth',8)->nullable()->comment('Sales Width');
            $table->mediumInteger('SelVolume')->nullable()->comment('	Volume - Sales Package UOM'); 
            $table->string('SelHeight',8)->nullable()->comment('Sales Height');
            $table->mediumInteger('SelPackUn')->nullable()->comment('Quantity per Package (Sales)');
            $table->mediumInteger('SelWeight')->nullable()->comment('Sales Purchasing '); 

            // Inventory Tab
            $table->string('GLMEthod',50)->nullable()->comment(' Set Item Group By');
            $table->string('InvntryUom',50)->nullable()->comment('Inventory Uom');
            $table->mediumInteger('MinLevel')->nullable()->comment('Minimum Inventory Level'); 
            $table->mediumInteger('MaxLevel')->nullable()->comment('Maximum Inventory Level'); 


            $table->char('VATLiable',1)->nullable()->comment('Tax Liable');

         


            $table->decimal('OnHand',19,6)->nullable()->comment("In Stock");
            $table->decimal('IsCommited',19,6)->nullable()->comment("Qty Ordered by Customers");
            $table->decimal('OnOrder',19,6)->nullable()->comment("Qty Ordered from Vendors");
            $table->decimal('MinOrdrQty',19,6)->nullable()->comment("Minimum Order Quantity");
            $table->string('DfltWH',8)->nullable()->comment('Default Warehouse');









            $table->decimal('NumInBuy',19,6)->nullable()->comment("No. of Items per Purchase Unit");
            $table->decimal('ReorderQty',19,6)->nullable()->comment("Required (Purchasing UoM)");
            $table->decimal('LstEvlPric',19,6)->nullable()->comment("Date of Last Reval. Price");
            $table->date('LstEvlDate')->nullable()->comment("Date of Last Reval. Price");
            $table->decimal('CustomPer',19,6)->nullable()->comment("Customs Rate");
            $table->char('Canceled',1)->nullable()->comment('Canceled Item [Yes/No]');
            $table->mediumInteger('MnufctTime')->nullable()->comment("Production Date in Days");
            $table->mediumText('SalUnitMsr')->nullable()->comment("Sales UoM");
            $table->mediumInteger('UserSign')->nullable()->comment('User Signature');
            $table->mediumInteger('UserSign2')->nullable()->comment('Updating User');
            $table->mediumText('PicturName')->nullable()->comment('Picture');
            $table->text('UserText')->nullable()->comment('Item Remarks');
            $table->string("TaxCodeAR",50)->nullable()->comment("Tax Code (A/R)");
            $table->string("TaxCodeAP",50)->nullable()->comment("Tax Code (A/P)");
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
