@extends('inventory::items.layout')

@section('content')
<div class="card">
    <div class="card-header">
        Sales Order
    </div>
    <div class="card-body">
    <table class="table table-light table-bordered">
          <tbody>
                             <!-- 1st Row -->
              <tr>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Coustomer Code </label>
                  </td>
                  <td>
                      <input class="form-control" type="text" name="ItemCode" />
                      <span class="fa fa-info-circle errspan"></span>
                  </td>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Order No </label>
                  </td>
                  <td>
                      <input class="form-control" type="text" name="CodeBars"  />
                  </td>
         
              </tr>


                  <!-- 2ND Row -->
                  <tr>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Coustomer Name </label>
                  </td>
                  <td>
                  <input class="form-control" type="text" name="ItemCode" />
                      <span class="fa fa-info-circle errspan"></span>
                  </td>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Status </label>
                  </td>
                  <td>
                                <select class="form-control " name="TaxType">
                                    <option>Open</option>
                                    <option>Open-Printed</option>
                                    <option>Closed</option>
                                    <option>Cancelled</option>
                                    <option>UnApproved</option>
                                    <option>Paid</option>
                                    <option>Delivered</option>

                                </select>
                            </td>
         
              </tr>


              
                  <!-- 3RD Row -->
                  <tr>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Contact Person </label>
                  </td>
                  <td>
                  <select class="form-control " name="TaxType">
                                    <option>---</option>
                                </select>
               
                  </td>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Posting Date </label>
                  </td>
                  <td>
                             

                  <input class="form-control" type="text" id="datepicker" name="ItemCode" />

                            </td>
         
              </tr>
              


               <!-- 4th Row -->
               <tr>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Pi Name  </label>
                  </td>
                  <td>
                  <input class="form-control" type="text"  name="ItemCode" />

               
                  </td>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Delivery Date </label>
                  </td>
                  <td>
                             

                  <input class="form-control" type="text" id="datepicker2" name="ItemCode" />

                            </td>
         
              </tr>

                 <!-- 5Th Row -->
                 <tr>
                  <td>
                  <select class="form-control " name="TaxType">
                                    <option>BP Currency</option>
                                </select>
                  </td>
                  <td>
                  

                  <input class="form-control" type="text"  name="ItemCode" />
    

               
                  </td>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Released Date </label>
                  </td>
                  <td>
                             

                  <input class="form-control" type="text" id="datepicker3" name="ItemCode" />

                            </td>
         
              </tr>
              
            </tbody>
        
        </table>
    </div>
  
</div>
<div class="clearfix"></div>

     <!-- Tabs Area Start -->
     <div class="tab-container">
          <ul class="nav nav-tabs" id="myTab">
              <li class="active">
                  <a data-target="#one" data-toggle="tab" class="font-weight-lighter small">Item Details</a>
              </li>
              <li>
                  <a data-target="#two" data-toggle="tab" class="font-weight-lighter small">Delivery Address</a>
              </li>
              <li>
                  <a data-target="#three" data-toggle="tab" class="font-weight-lighter small">Accounting</a>
              </li>
              <li>
                  <a data-target="#four" data-toggle="tab" class="font-weight-lighter small">Tax</a>
              </li>
         
          </ul>


          
          <div class="tab-content border ">
              <div class="tab-pane active" id="one">
                  <table class="table   table-bordered">
                
             

                  <thead class="">
                          <tr>
                              <th>#</th>
                              <th>Item Code</th>
                              <th>Item Description</th>
                              <th>Quantity</th>
                              <th>Unit Price</th>
                              <th>Discount</th>
                              <th>Tax</th>
                              <th>Total Lc</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                          <td>
                                  
                              </td>
                              <td>
                                  <input class="form-control" type="text" name="FirmCode" />
                              </td>
                           
                              <td>
                                  <input class="form-control" type="text" name="ShipType" />
                              </td>

                              <td>
                                  <input class="form-control" type="text" name="ShipType" />
                              </td>

                              <td>
                                  <input class="form-control" type="text" name="ShipType" />
                              </td>

                              <td>
                                  <input class="form-control" type="text" name="ShipType" />
                              </td>
                              <td>
                                  <input class="form-control" type="text" name="ShipType" />
                              </td>

                              <td>
                                  <input class="form-control" type="text" name="ShipType" />
                              </td>
                          
                          </tr>
                        
                      </tbody>
                  </table>
              </div>

              <div class="tab-pane " id="two">
              2
              </div>
              <div class="tab-pane " id="three">
              3
              </div>

              <div class="tab-pane " id="four">
              4
              </div>


              </div>

           
            <table class="table table-light table-bordered">
          <tbody>

<tr>
<td>
    <div class="row">
        <div class="col">

            <div class="row">
                <div class="col mini-box"> <label class="form-check-label font-weight-lighter small"> Marketing Person </label></div>
                <div class="col mini-box">  
                    <select class="form-control " name="TaxType">
                    <option>---</option>
                </select></div>
              </div>
          <div class="row">
            <div class="col mini-box">                      <label class="form-check-label font-weight-lighter small"> Owner </label>
    </div>
            <div class="col mini-box">                      <input class="form-control" type="text" name="ItemCode" />
    </div>
          </div>


          <div class="row">
            <div class="col mini-box">                      <label class="form-check-label font-weight-lighter small"> Remarks </label>
    </div>
            <div class="col mini-box">                    <textarea  class="form-control" name="ItemCode" rows="3"></textarea>   
     
    </div>
          </div>        
        </div>
        <div class="col">
            <div class="row">
                <div class="col mini-box"> <label class="form-check-label font-weight-lighter small"> Total Before Discount </label></div>
                <div class="col mini-box">  
                    <input class="form-control" type="text" name="ItemCode" />
                </div>
              </div>


              <div class="row">
                <div class="col mini-box"> <label class="form-check-label font-weight-lighter small"> Discount  % <input class="form-control pull-right" style="width: 40px;" type="text" name="ItemCode" /> </label>
                    
                </div>
                <div class="col mini-box">  
                    <input class="form-control" type="text" name="ItemCode" />
                </div>
              </div>

              <div class="row">
                <div class="col mini-box"> <label class="form-check-label font-weight-lighter small">Fright <i class="fa fa-arrow-right"></i>
                </label></div>
                <div class="col mini-box">  
                    <input class="form-control" type="text" name="ItemCode" />
                </div>
              </div>

              <div class="row">
                <div class="col mini-box"> <label class="form-check-label font-weight-lighter small">Tax 
                </label></div>
                <div class="col mini-box">  
                    <input class="form-control" type="text" name="ItemCode" />
                </div>
              </div>

              <div class="row">
                <div class="col mini-box"> <label class="form-check-label font-weight-lighter small">Total Amount 
                </label></div>
                <div class="col mini-box">  
                    <input class="form-control" type="text" name="ItemCode" />
                </div>
              </div>
        </div>
    </div>

</td>
<td></td>
</tr>






         
                </tbody>
         
            </table>
            <div class="clearfix">
                <div class="row">
                    <div class="col mini-box"> <button class="btn btn-primary btn-2">ADD</button>  </div>
                    <div class="col mini-box">  
                        
                    </div>
                  </div>


                
                <br>
          </div>
 @endsection

@section('js')
