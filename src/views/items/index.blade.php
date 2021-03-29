@extends('inventory::layouts.layout')

@section('content')
@extends('inventory::layouts.menubar')


@if(@isset($find  ) && $find == 'find') <form action="{{route('items.find')}}" method="post" id="myform" > @csrf @endisset

@if(@isset($find  ) && $find == 'add')  
<form action="{{route('items.store')}}" method="post" id="myform" onsubmit="Swal.fire({
  title: 'Error!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
})"
> @csrf @endisset

@if(@isset($find  ) && $find == 'edit')
 <form action="{{route('items.update',$output[0]->DocEntry )}}" method="post" id="myform" > @csrf @method('PUT') @endisset




<div class="card">
<div class="card-header border">Item Master Data   



  <a href="{{route('items.fbtn',['btn' => 'find'])}}" class="" ><span class=" fa fa-binoculars text-dark "></span></a>   
  <a href="{{route('items.fbtn',['btn' => 'add'])}}" class="" ><span class=" fa fa-save text-dark  "></span></a>   

  </div>

<!--  সার্চের রেজাল্ট এর কয়টা রও (ROW) -->
@isset($moreoutput){{  count($moreoutput)}} @endisset

<!-- @isset($output){{  count($output) }} @endisset -->
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif


  <div class="card-body">

      <table class="table table-light table-bordered">
          <tbody>
              <!--   General Area -->

              <!-- 1st Row -->
              <tr>
            
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Item Code </label>
                        @error('ItemCode')<i class="fa fa-asterisk fa-xs text-danger " aria-hidden="true"></i>  @enderror
                              
                  </td>
                  <td>
                      <input class="form-control" type="text" name="ItemCode" value="@isset($output[0]){{$output[0]->ItemCode }} @endisset" />
                  </td>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Bar Code </label>
                  </td>
                  <td>
                      <input class="form-control" type="text" name="CodeBars"  value="@isset($output[0]){{$output[0]->CodeBars }} @endisset" />
                  </td>
                  <td>
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" name="InvntItem" id="InvntItem"  value="@isset($output[0]){{$output[0]->InvntItem }} @endisset"/>
                          <label class="custom-control-label font-weight-lighter small" for="InvntItem">Inventory Item</label>
                      </div>
                  </td>
              </tr>

              <!-- 2ND ROW -->
              <tr>
                  <td>
                      <label class="form-check-label font-weight-lighter small" > Item Description </label>
                      @error('ItemName')<i class="fa fa-asterisk fa-xs text-danger " aria-hidden="true"></i>  @enderror

                  </td>
                 
                  
                  <td>
                      <input class="form-control input-xs" type="text" name="ItemName" value="@isset($output[0]){{$output[0]->ItemName }} @endisset" />
                  </td>
                  <td>
                      <label class="form-check-label font-weight-lighter small" > Item Group </label>
                  </td>
                  <td>
                      <select class="form-control" id="sel1" name="ItmsGrpCod" value="@isset($output[0]){{$output[0]->ItmsGrpCod }} @endisset">
                            <option></option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                      </select>
                  </td>
                  <td>
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" name="SellItem" id="SellItem" value="@isset($output[0]){{$output[0]->SellItem }} @endisset"   />
                          <label class="custom-control-label font-weight-lighter small" for="SellItem">Sales Item</label>
                      </div>
                  </td>
              </tr>

              <!-- 3rd  Row -->
              <tr>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Foreign Name </label>
                  </td>
                  <td>
                      <input class="form-control" type="text" name="FrgnName" value="@isset($output[0]){{$output[0]->FrgnName }} @endisset"/>
                  </td>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Item Type </label>
                  </td>
                  <td>
                      <select class="form-control" name="ItemType" id="sel1">
                      <option></option>
                          <option >1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                      </select>
                  </td>
                  <td>
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" name="PrchseItem" value="@isset($output[0]){{$output[0]->PrchseItem }} @endisset" id="PrchseItem" />
                          <label class="custom-control-label font-weight-lighter small" for="PrchseItem">Purchased Item</label>
                      </div>
                  </td>
              </tr>
              <!-- 4th Row -->
              <tr>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Unit Price </label>
                  </td>
                  <td>
                      <input class="form-control" type="text"  />
                  </td>
                  <td>
                      <label class="form-check-label font-weight-lighter small"> Price List </label>
                  </td>
                  <td>
                      <select class="form-control" id="sel1">
                      <option></option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                      </select>
                  </td>
                  <td>
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" name="AssetItem" id="AssetItem" />
                          <label class="custom-control-label font-weight-lighter small" for="AssetItem">Fixed Asset</label>
                      </div>
                  </td>
              </tr>
          </tbody>
      </table>

           
  </div>
</div>
      <!-- Tabs Area Start -->
      <div class="tab-container">
          <ul class="nav nav-tabs" id="myTab">
              <li class="active">
                  <a data-target="#general" data-toggle="tab" class="font-weight-lighter small">General</a>
              </li>
              <li>
                  <a data-target="#purchace" data-toggle="tab" class="font-weight-lighter small">Purchacing Data</a>
              </li>
              <li>
                  <a data-target="#sales" data-toggle="tab" class="font-weight-lighter small">Sales</a>
              </li>
              <li>
                  <a data-target="#inventory" data-toggle="tab" class="font-weight-lighter small">Inventory</a>
              </li>
              <li>
                  <a data-target="#planning" data-toggle="tab" class="font-weight-lighter small">Planning</a>
              </li>
              <li>
                  <a data-target="#properties" data-toggle="tab" class="font-weight-lighter small">Properties</a>
              </li>
          </ul>
          <div class="tab-content border ">
              <div class="tab-pane active" id="general">
                  <table class="table table-light">
                      <tbody>
                          <tr>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Manufacturer </label>
                              </td>
                              <td>
                                  <input class="form-control" type="text" name="FirmCode" />
                                  <span class="fa fa-info-circle errspan"></span>
                              </td>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Shipping Type </label>
                              </td>
                              <td>
                                  <input class="form-control" type="text" name="ShipType" />
                              </td>
                              <td>
                                  <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" name="Inactive" id="Inactive" />
                                      <label class="custom-control-label font-weight-lighter small" for="Inactive">In Active</label>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Additional Identifier </label>
                              </td>
                              <td>
                                  <input class="form-control" type="text" name="SWW" />
                              </td>

                              <td>
                                <label class="form-check-label font-weight-lighter small"> Tax Type </label>
                            </td>
                            <td>
                                <select class="form-control " name="TaxType">
                                <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </td>


                              <td>
                                  <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" name="validFor" id="validFor" />
                                      <label class="custom-control-label font-weight-lighter small" for="validFor">Active</label>
                                  </div>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <div class="tab-pane" id="purchace">
                  <table class="table table-light">
                      <tbody>
                          <tr>
                              <td>
                                  <label class="form-check-label font-weight-lighter small" > Preferred Vendor </label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="CardCode"  />
                                  <span class="fa fa-info-circle errspan"></span>
                              </td>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Length </label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="prclength"  />
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <label class="form-check-label font-weight-lighter small" > Mfr Catalog No. </label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="SuppCatNum"  />
                              </td>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Width </label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="prcwidth"  />
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Purchase Unit </label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="BuyUnitMsr"  />
                              </td>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Height </label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="prcheight"  />
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Qty Per Package </label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="PurPackUn"  />
                              </td>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Volume</label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="BVolume"  />
                              </td>
                          </tr>
                          <tr>

                            <td>
                              <label class="form-check-label font-weight-lighter small" for="CstGrpCode"> Customs Group </label>
                          </td>
                          <td>
                              <select class="form-control" id="CstGrpCode" name="CstGrpCode">
                              <option></option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                              </select>
                          </td>


                       
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Weight</label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="BWeight"  />
                              </td>
                          </tr>
                      
                      </tbody>
                  </table>
              </div>
              <div class="tab-pane" id="sales">
                  <table class="table table-light">
                      <tbody>
                          <tr>
                              <td>
                                  <label class="form-check-label font-weight-lighter small" > Sales Uom </label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="SelUnitMsr"  />
                                  <span class="fa fa-info-circle errspan"></span>
                              </td>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Length </label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="Sellength"  />
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <label class="form-check-label font-weight-lighter small" > Qty Per Package </label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="SelPackUn"  />
                              </td>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Width </label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="Selwidth"  />
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Packageing Uom </label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="SelVolume"  />
                              </td>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Height </label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="SelHeight"  />
                              </td>
                          </tr>
                          <tr>
                        
                     
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Weight </label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name="SelWeight"  />
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <div class="tab-pane" id="inventory">

                <table class="table table-light table-bordered">
                  <tbody>
                    <tr>
                      <td>
                        <label class="form-check-label font-weight-lighter small" for="GLMEthod"> Set Item Group By </label>
                    </td>
                    <td>
                        <select class="form-control" id="GLMEthod" name="GLMEthod">
                            <option></option>
                            <option>WareHouse</option>
                            <option>Item Group</option>
                            <option>Item Level</option>
                           
                        </select>
                    </td>
                    <td>
                      <label class="form-check-label font-weight-lighter small"> Minimum </label>
                  </td>
                  <td>
                      <input class="form-control input-xs" type="text" name="MinLevel"  />
                  </td>
                    </tr>

                    <tr>
                      <td>
                        <label class="form-check-label font-weight-lighter small"> Inventory Uom </label>
                    </td>
                    <td>
                        <input class="form-control input-xs" type="text" name="InvntryUom"  />
                    </td>
                    <td>
                      <label class="form-check-label font-weight-lighter small"> Maximum </label>
                  </td>
                  <td>
                      <input class="form-control input-xs" type="text" name="MaxLevel"  />
                  </td>
                    </tr>
                  </tbody>
                </table>
                  <table class="table table-bordered">
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
                          <tr></tr>
                      </tbody>
                  </table>
              </div>
              <div class="tab-pane" id="planning">
                  <table class="table table-light">
                      <tbody>
                          <tr>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Planning Methode</label>
                              </td>
                              <td>
                                  <select class="form-control">
                                      <option>MRP</option>
                                      <option>NONE</option>
                                  </select>
                              </td>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Procurement Methode</label>
                              </td>
                              <td>
                                  <select class="form-control">
                                      <option>MAKE</option>
                                      <option>BUY</option>
                                  </select>
                              </td>
                              <td>
                                  <label class="form-check-label font-weight-lighter small" > Minimum Order Qty</label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name=""  />
                              </td>
                              <td>
                                  <label class="form-check-label font-weight-lighter small" > Lead Time</label>
                              </td>
                              <td>
                                  <input class="form-control input-xs" type="text" name=""  />
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <div class="tab-pane" id="properties">
                  <table class="table table-light">
                      <tbody>
                          <tr>
                              <td>
                                  <label class="form-check-label font-weight-lighter small"> Remarks </label>
                              </td>
                              <td></td>
                              <td>
                                  <textarea class="form-control" rows="5" id="comment"></textarea>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
       
      
      <!-- Tabs Area End -->
      <div class="clearfix">

      @if(@isset($find  ) && $find == 'add') <button class="btn btn-primary btn-2" >ADD</button>   @endisset
      @if(@isset($find  ) && $find == 'find') <button class="btn btn-primary btn-2" >Find</button>   @endisset
      @if(@isset($find  ) && $find == 'OK') <button class="btn btn-primary btn-2" >OK</button>   @endisset
      @if(@isset($find  ) && $find == 'edit') <button class="btn btn-primary btn-2" >Edit</button>   @endisset
      <br>
      @include('inventory::layouts.sessionmessage')
      @include('inventory::layouts.modal')


      </div>
      </form>

      <div class="card-footer ">
      
       </div>

 @endsection

@section('js')
