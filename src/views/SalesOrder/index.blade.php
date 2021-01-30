@extends('inventory::items.layout')

@section('content')
<form action="{{route('salesOreder.store')}}" method="post">
                    @csrf
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
                      <input class="form-control" type="text" name="CardCode" />
                      <span class="fa fa-info-circle errspan"></span>
                  </td>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Order No </label>
                  </td>
                  <td>
                      <input class="form-control" type="text" name="DocNum"  />
                  </td>
         
              </tr>


                  <!-- 2ND Row -->
                  <tr>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Coustomer Name </label>
                  </td>
                  <td>
                  <input class="form-control" type="text" name="CardName" />
                      <span class="fa fa-info-circle errspan"></span>
                  </td>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Status </label>
                  </td>
                  <td>
                                <select class="form-control" >
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
                  <select class="form-control " name="ContctCode">
                                    <option value="f">---</option>
                                </select>
               
                  </td>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Posting Date </label>
                  </td>
                  <td>
                             

                  <input class="form-control" type="text" id="datepicker" name="Docdate" />

                            </td>
         
              </tr>
              


               <!-- 4th Row -->
               <tr>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Pi Name  </label>
                  </td>
                  <td>
                  <input class="form-control" type="text"  name="NumAtCard" />

               
                  </td>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Delivery Date </label>
                  </td>
                  <td>
                             

                  <input class="form-control" type="text" id="datepicker2" name="DocDueDate" />

                            </td>
         
              </tr>

                 <!-- 5Th Row -->
                 <tr>
                  <td>
                  <select class="form-control " name="CurSource">
                                    <option value="$">BP Currency</option>
                                </select>
                  </td>
                  <td>
                  

                  <input class="form-control" type="text"   />
    

               
                  </td>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Released Date </label>
                  </td>
                  <td>
                             

                  <input class="form-control" type="text" id="datepicker3" name="TaxDate" />

                            </td>
         
              </tr>
              
            </tbody>
        
        </table>
    </div>
  
</div>
<div class="clearfix"></div>


<!--      Tabs Area Start -->
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
                
                  <table class="table   table-bordered itemrow" id="rowtable">
                
             

                  <thead class="">

                            <th>#</th>
                             
                              <th>Item Code</th>
                              <th>Item Description</th>
                              <th>Quantity</th>
                              <th>Unit Price</th>
                              <th>Discount</th>
                              <th>Tax</th>
                              <th>Total Lc</th>
                         
                      </thead>
                      <tbody>
                          <tr>
                              <td> <i class="fa fa-plus" id='addRowButton'></i> <i class="fa fa-minus" onClick="$(this).closest('tr').remove();"></i> 
                                <!-- <button class="form-control flex tdAdd"> <i class="fa fa-minus"></i> </button> -->
                            </td>
                        
                              <td>
                                  <input class="form-control" type="text" name="ItemCode[]" />
                              </td>
                           
                              <td>
                                  <input class="form-control" type="text" name="ItemName[]" />
                              </td>

                              <td>
                                  <input class="form-control" type="text" name="qty[]" />
                              </td>
                              <td>
                                <input class="form-control" type="text"  />
                            </td>
                            <td>
                                <input class="form-control" type="text"  />
                            </td>
                        
                            <td>
                                <input class="form-control" type="text"  />
                            </td>
                            <td>
                                <input class="form-control" type="text"  />
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
           
       
        <!-- Tab End --> 
           
              <div class="clearfix"></div>
             
            <table class="table table-light table-bordered">
          <tbody>

<tr>
<td>
    <div class="row">
        <div class="col">

            <div class="row">
                <div class="col mini-box"> <label class="form-check-label font-weight-lighter small"> Marketing Person </label></div>
                <div class="col mini-box">  
                    <select class="form-control " name="Slpcode">
                    <option value="h">---</option>
                </select></div>
              </div>
          <div class="row">
            <div class="col mini-box">                      <label class="form-check-label font-weight-lighter small"> Owner </label>
    </div>
            <div class="col mini-box">                      <input class="form-control" type="text" name="OwnerCode" />
    </div>
          </div>


          <div class="row">
            <div class="col mini-box">                      <label class="form-check-label font-weight-lighter small"> Remarks </label>
    </div>
            <div class="col mini-box">                    <textarea  class="form-control" name="Comments" rows="3"></textarea>   
     
    </div>
          </div>        
        </div>
        <div class="col">
            <div class="row">
                <div class="col mini-box"> <label class="form-check-label font-weight-lighter small"> Total Before Discount </label></div>
                <div class="col mini-box">  
                    <input class="form-control" type="text"  />
                </div>
              </div>


              <div class="row">
                <div class="col mini-box"> <label class="form-check-label font-weight-lighter small"> Discount  % <input class="form-control pull-right" style="width: 40px;" type="text"  /> </label>
                    
                </div>
                <div class="col mini-box">  
                    <input class="form-control" type="text"  />
                </div>
              </div>

              <div class="row">
                <div class="col mini-box"> <label class="form-check-label font-weight-lighter small">Fright <i class="fa fa-arrow-right"></i>
                </label></div>
                <div class="col mini-box">  
                    <input class="form-control" type="text"  />
                </div>
              </div>

              <div class="row">
                <div class="col mini-box"> <label class="form-check-label font-weight-lighter small">Tax 
                </label></div>
                <div class="col mini-box">  
                    <input class="form-control" type="text"  />
                </div>
              </div>

              <div class="row">
                <div class="col mini-box"> <label class="form-check-label font-weight-lighter small">Total Amount 
                </label></div>
                <div class="col mini-box">  
                    <input class="form-control" type="text"  />
                </div>
              </div>
        </div>
    </div>

</td>
<td></td>
</tr>






         
                </tbody>
         
            </table>
        
                <div class="row">
                    <div class="col mini-box"> <button class="btn btn-primary btn-2" type="submit">ADD</button>  </div>
                    <div class="col mini-box">  
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Copy
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div> 
                    </div>
                  </div>

     
                
                <br>
                </form>  
  @include('inventory::items.sessionmessage')

 @endsection

@section('js')
