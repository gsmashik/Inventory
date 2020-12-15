@extends('inventory::items.layout')

@section('content')
  <div class="card">
    <div class="card-body">
      <table class="table table-light  table-bordered ">
          <tbody >
            <tr>
                <td> <label class="form-check-label font-weight-lighter small" for="1"> Item Code </label></td>
                <td><input class="form-control" type="text" name="" id="1"></td>
                <td> <label class="form-check-label font-weight-lighter small" for="2" > Item Description </label> </td>
                <td><input class="form-control input-xs" type="text" name=""  id="2"></td>
                <td> <label class="form-check-label font-weight-lighter small" for="1">  Foreign Name  </label></td>
                <td><input class="form-control" type="text" name="" id="1"></td>
                <td>
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck2">
                      <label class="custom-control-label font-weight-lighter small" for="customCheck2">Inventory Item</label>
                  </div>
                </td>
            </tr>
            <tr >



              <td> <label class="form-check-label font-weight-lighter small" for="1"> Bar Code </label></td>
              <td><input class="form-control" type="text" name="" id="2"></td>
     
                <td> <label class="form-check-label font-weight-lighter small" for="1"> Item Type </label></td>
                <td>
                  <select class="form-control" id="sel1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                  </select>
                </td>
                <td> <label class="form-check-label font-weight-lighter small" for="2" > Item Group </label> </td>
                <td>
                  <select class="form-control" id="sel1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                  </select>
                </td>

                
                <td>
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck3">
                      <label class="custom-control-label font-weight-lighter small" for="customCheck3">Sales Item</label>
                  </div>
                </td>
            </tr>
            <tr >

              
                <td> <label class="form-check-label font-weight-lighter small" for="1"> Unit Price </label></td>
                <td>
                  <input class="form-control" type="text" name="" >
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
                      <input type="checkbox" class="custom-control-input" id="customCheck3">
                      <label class="custom-control-label font-weight-lighter small" for="customCheck3">Purchased Item</label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck3">
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
        
        </ul>
      
        <div class="tab-content border">
          <div class="tab-pane active" id="general">
            <table class="table table-light">
              <tbody>
                <tr>
                  <td> <label class="form-check-label font-weight-lighter small" for="1"> Manufacturer  </label></td>
                  <td>       
                    
                    <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select></td>

                <td> <label class="form-check-label font-weight-lighter small" for="1"> Shipping Type </label></td>
                <td>       
                  
                  <select class="form-control" id="sel1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
              </select></td>

              <td>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                    <label class="custom-control-label font-weight-lighter small" for="customCheck5">Hold</label>
                </div>
              </td>

              <td>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label font-weight-lighter small" for="customCheck4">Valid</label>
                </div>
              </td>


                </tr>
              </tbody>
            </table>
            </div>
          <div class="tab-pane " id="purchace">

            <table class="table table-light">
              <tbody>
                <tr>
                  <td> <label class="form-check-label font-weight-lighter small" for="2" > Prefered Vendor </label> </td>
                  <td><input class="form-control input-xs" type="text" name=""  id="2"></td>

                  <td> <label class="form-check-label font-weight-lighter small" for="2" > Prefered Vendor </label> </td>
                  <td><input class="form-control input-xs" type="text" name=""  id="2"></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="tab-pane" id="sales">Message</div>
          <div class="tab-pane " id="inventory">Settings</div>
        </div>
      </div>
      <!-- Tabs Area End -->
    </div>
  </div>

@endsection

@section('js')
