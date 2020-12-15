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

              <td> <label class="form-check-label font-weight-lighter small" for="1">  Price List </label></td>
              <td>       
                
                <select class="form-control" id="sel1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select></td>


         
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

              <td> <label class="form-check-label font-weight-lighter small" for="1"> Bar Code </label></td>
              <td><input class="form-control" type="text" name="" id="2"></td>
     
                <td> <label class="form-check-label font-weight-lighter small" for="1"> Unit Price </label></td>
                <td>
                  <input class="form-control" type="text" name="" >
                </td>
 
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
          <li class="active"><a data-target="#general" data-toggle="tab">General</a></li>
          <li><a data-target="#profile" data-toggle="tab">Profile</a></li>
          <li><a data-target="#messages" data-toggle="tab">Messages</a></li>
          <li><a data-target="#settings" data-toggle="tab">Settings</a></li>
        
        </ul>
      
        <div class="tab-content border">
          <div class="tab-pane active" id="general">
            <table class="table table-light">
              <tbody>
                <tr>
                  <td>Home </td>
                  <td>Home </td>
                </tr>
              </tbody>
            </table>
            </div>
          <div class="tab-pane" id="profile">Profile</div>
          <div class="tab-pane" id="messages">Message</div>
          <div class="tab-pane" id="settings">Settings</div>
        </div>
      </div>
      <!-- Tabs Area End -->
    </div>
  </div>

@endsection

@section('js')
