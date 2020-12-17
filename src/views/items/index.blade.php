@extends('inventory::items.layout')

@section('content')
  <div class="card">
    <div class="card-body">
      <table class="table table-light  table-bordered ">
          <tbody >
            <tr>
                <td> <label class="form-check-label font-weight-lighter small" for="1"> Item Code </label></td>
                <td><input class="form-control" type="text" name="ItemCode" id="1"></td>
                <td> <label class="form-check-label font-weight-lighter small" for="1"> Bar Code </label></td>
              <td><input class="form-control" type="text" name="CodeBars" id="2"></td>


              
                <td>
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="InvntItem" id="customCheck2">
                      <label class="custom-control-label font-weight-lighter small" for="customCheck2">Inventory Item</label>
                  </div>
                </td>
            </tr>
            <tr >



              
              <td> <label class="form-check-label font-weight-lighter small" for="2" > Item Description </label> </td>
              <td><input class="form-control input-xs" type="text" name="ItemName"  id="2"></td>
           


          
                <td> <label class="form-check-label font-weight-lighter small" for="2" > Item Group </label> </td>
                <td>
                  <select class="form-control" id="sel1" name="ItmsGrpCod">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                  </select>
                </td>

                
                <td>
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="SellItem" id="customCheck3">
                      <label class="custom-control-label font-weight-lighter small" for="customCheck3">Sales Item</label>
                  </div>
                </td>
            </tr>

            <tr>
              <td> <label class="form-check-label font-weight-lighter small" for="1">  Foreign Name  </label></td>
              <td><input class="form-control" type="text" name="FrgnName" id="1"></td>

              <td> <label class="form-check-label font-weight-lighter small" for="1"> Item Type </label></td>
              <td>
                <select class="form-control" name="ItemType" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
              </td>
              <td>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="PrchseItem" id="customCheck3">
                    <label class="custom-control-label font-weight-lighter small" for="customCheck3">Purchased Item</label>
                </div>
              </td>
            </tr>
            <tr >

             

              
                <td> <label class="form-check-label font-weight-lighter small" for="1"> Unit Price </label></td>
                <td>
                  <input class="form-control" type="text"  >
                </td>

                
              <td> <label class="form-check-label font-weight-lighter small" for="1">  Price List </label></td>
              <td>       
                
                <select class="form-control" id="sel1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select></td>
 
            
                <td>
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="AssetItem" id="customCheck3">
                      <label class="custom-control-label font-weight-lighter small" for="customCheck3">Fixed Asset</label>
                  </div>
                </td>
            </tr>
          </tbody>
      </table>

      <!-- Tabs Area Start -->
      <div class="tab-container ">
        <ul class="nav nav-tabs" id="myTab">
          <li class="active"><a data-target="#general" data-toggle="tab" class="font-weight-lighter  small ">General</a></li>
          <li><a data-target="#purchace" data-toggle="tab" class="font-weight-lighter  small " >Purchacing Data</a></li>
          <li><a data-target="#sales" data-toggle="tab" class="font-weight-lighter  small " >Sales</a></li>
          <li><a data-target="#inventory" data-toggle="tab" class="font-weight-lighter  small ">Inventory</a></li>
          <li><a data-target="#planning" data-toggle="tab" class="font-weight-lighter  small ">Planning</a></li>
          <li><a data-target="#properties" data-toggle="tab" class="font-weight-lighter  small ">Properties</a></li>
        </ul>
      
        <div class="tab-content border">
          <div class="tab-pane active" id="general">
            <table class="table table-light">
              <tbody>
                <tr>
                  <td> <label class="form-check-label font-weight-lighter small" for="1"> Manufacturer  </label></td>
                     
                  <td><input class="form-control" type="text" name="FirmCode" id="1"></td>

                <td> <label class="form-check-label font-weight-lighter small" for="1"> Shipping Type </label></td>
                   
                  
                <td><input class="form-control" type="text" name="" id="1"></td>

       

                <td>
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="Inactive" id="customCheck5">
                      <label class="custom-control-label font-weight-lighter small" for="customCheck5">In Active</label>
                  </div>
                </td>
                </tr>
                <tr>
               


                    <td> <label class="form-check-label font-weight-lighter small" for="1"> Additional Identifier
 </label></td>
                   
                  
                    <td><input class="form-control" type="text" name="SWW" id="1"></td>


    
                  <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"  name="validFor" id="customCheck4">
                        <label class="custom-control-label font-weight-lighter small" for="customCheck4">Active</label>
                    </div>
                  </td>

                </tr>
                <tr>
             
            
                </tr>
           
           
              
              </tbody>
            </table>
            </div>
          <div class="tab-pane " id="purchace">

            <table class="table table-light">
              <tbody>
                <tr>
                  <td> <label class="form-check-label font-weight-lighter small" for="2" > Preferred Vendor
                  </label> </td>
                  <td><input class="form-control input-xs" type="text" name="CardCode"  id="2"> <span class="fa fa-info-circle errspan"></span>
                  </td>

             

            
         
            <td> <label class="form-check-label font-weight-lighter small" for="1">  Length </label></td>
            <td><input class="form-control input-xs" type="text" name="prclength"  id="2"></td>
      
                </tr>
                <tr>
                  <td> <label class="form-check-label font-weight-lighter small" for="2" > Mfr Catalog No.

                  </label> </td>
                  <td><input class="form-control input-xs" type="text" name="SuppCatNum"  id="2">
                  </td>


         

          

                <td> <label class="form-check-label font-weight-lighter small" for="1">  Width </label></td>
                <td><input class="form-control input-xs" type="text" name="prcwidth"  id="2"></td>
               
                </tr>

                <tr>
               
                <td> <label class="form-check-label font-weight-lighter small" for="1"> Purchase Unit </label></td>
                <td><input class="form-control input-xs" type="text" name="BuyUnitMsr"  id="2"></td>
             
        
                
              

                <td> <label class="form-check-label font-weight-lighter small" for="1">  Height </label></td>
                <td><input class="form-control input-xs" type="text" name="prcheight"  id="2"></td>

      
                </tr>

                <tr>

                  <td> <label class="form-check-label font-weight-lighter small" for="1">  Qty Per Package </label></td>
                  <td><input class="form-control input-xs" type="text" name="PurPackUn"  id="2"></td>

                  <td> <label class="form-check-label font-weight-lighter small" for="1">  Volume</label></td>
                  <td><input class="form-control input-xs" type="text" name=""  id="2"></td>
            

               
                </tr>

                <tr>
                  <td> <label class="form-check-label font-weight-lighter small" for="1">  Customs Group </label></td>
                  <td><input class="form-control input-xs" type="text" name=""  id="2"></td>

                  <td> <label class="form-check-label font-weight-lighter small" for="1">  Weight</label></td>
                  <td><input class="form-control input-xs" type="text" name=""  id="2"></td>
                </tr>
                <tr>

                  <td> <label class="form-check-label font-weight-lighter small" for="1"> Tax Type </label></td>
                  <td>       
                    
                    <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select></td>

          
                </tr>
              </tbody>
            </table>
          </div>
          <div class="tab-pane" id="sales">
          <table class="table table-light">
              <tbody>
                    
          
                <tr>
                  <td> <label class="form-check-label font-weight-lighter small" for="2" > Sales Uom
                  </label> </td>
                  <td><input class="form-control input-xs" type="text" name=""  id="2"> <span class="fa fa-info-circle errspan"></span>
                  </td>

             

                
         
            <td> <label class="form-check-label font-weight-lighter small" for="1">  Length </label></td>
            <td><input class="form-control input-xs" type="text" name=""  id="2"></td>
      
                </tr>
                <tr>
                  <td> <label class="form-check-label font-weight-lighter small" for="2" > Items Per Unit

                  </label> </td>
                  <td><input class="form-control input-xs" type="text" name=""  id="2">
                  </td>


         

          

                <td> <label class="form-check-label font-weight-lighter small" for="1">  Width </label></td>
                <td><input class="form-control input-xs" type="text" name=""  id="2"></td>
                
               
              
                </tr>

                <tr>
               
                <td> <label class="form-check-label font-weight-lighter small" for="1"> Packageing Uom  </label></td>
                <td><input class="form-control input-xs" type="text" name=""  id="2"></td>
             
        
                
               

                <td> <label class="form-check-label font-weight-lighter small" for="1">  Height </label></td>
                <td><input class="form-control input-xs" type="text" name=""  id="2"></td>

      
                </tr>

                <tr>


                  <td> <label class="form-check-label font-weight-lighter small" for="1">  Qty Per Package </label></td>
                  <td><input class="form-control input-xs" type="text" name=""  id="2"></td>


                  <td> <label class="form-check-label font-weight-lighter small" for="1">  Volume </label></td>
                  <td><input class="form-control input-xs" type="text" name=""  id="2"></td>


         
               
                </tr>
                <tr>

                  <td> <label class="form-check-label font-weight-lighter small" for="1"> Tax Type </label></td>
                  <td>       
                    
                    <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select></td>
                <td> <label class="form-check-label font-weight-lighter small" for="1">  Weight </label></td>
                <td><input class="form-control input-xs" type="text" name=""  id="2"></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="tab-pane " id="inventory">
          <table class="table  table-bordered ">
            <thead>
              <tr>
                <th>Wh Code</th>
                <th>Wh Name</th>
                <th>In Stock</th>
                <th>In Commited</th>
                <th>In Ordered</th>
                <th>In Availabe</th>
              </tr>
            </thead>
            <tbody>
              <tr>
             
              </tr>
         
            </tbody>
          </table>
          </div>


          <div class="tab-pane " id="planning">
            <table class="table table-light">
 
              <tbody>
                <tr>
                  <td> <label class="form-check-label font-weight-lighter small" > Planning Methode</label></td>
                  <td>       
                    
                    <select class="form-control" >
                    <option>MRP</option>
                    <option>NONE</option>
                 
                </select></td>

                <td> <label class="form-check-label font-weight-lighter small" > Procurement Methode</label></td>
                <td>       
                  
                  <select class="form-control" >
                  <option>MAKE</option>
                  <option>BUY</option>
               
              </select></td>


              <td> <label class="form-check-label font-weight-lighter small" for="2" > Minimum Order Qty</label> </td>
                  <td><input class="form-control input-xs" type="text" name=""  id="2"></td>
               
                <td> <label class="form-check-label font-weight-lighter small" for="2" > Lead Time</label> </td>
                  <td><input class="form-control input-xs" type="text" name=""  id="2"></td>
                </tr>
              </tbody>
            </table>
            </div>

            
          <div class="tab-pane " id="properties">
            <table class="table table-light">
 
              <tbody>
                <tr>
                  <td> <label class="form-check-label font-weight-lighter small" for="1"> Remarks  </label></td>
                  <td>       
                  <td>  <textarea class="form-control" rows="5" id="comment"></textarea>
                  </td>
                </tr>
              </tbody>
            </table>
            </div>
        </div>
      </div>
      <!-- Tabs Area End -->
    </div>
  </div>

@endsection

@section('js')
