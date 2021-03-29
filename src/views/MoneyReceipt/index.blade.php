@extends('inventory::layouts.layout')

@section('content')
@extends('inventory::layouts.menubar')
<form action="{{route('moneyreceipt.store')}}" method="post" >
                    @csrf

<div class="card">

  <div class="card-header">Money Receipt</div>

  <div class="card-body">
                 
  <table class="table   table-bordered itemrow" id="rowtable">
                
             

                <thead class="">

                          <th>#</th>
                           
                            <th>Date</th>
                            <th>Purpose</th>
                            <th>Quantity                              @error('Quantity.*')<i class="fa fa-exclamation-triangle fa-xs text-danger " aria-hidden="true"></i>  @enderror
 </th>
                            <th>Remarks</th>
                       
                       
                    </thead>
                    <tbody>
                        <tr>
                            <td> <i class="fa fa-plus" id='addRowButton'></i> <i class="fa fa-minus" onClick="$(this).closest('tr').remove();"></i> 
                              <!-- <button class="form-control flex tdAdd"> <i class="fa fa-minus"></i> </button> -->
                          </td>
                      
                            <td>
                                <input class="form-control datepicker" type="text" name="Date[]" />
                            </td>
                         
                            <td>
                                <input class="form-control" type="text" name="Purpose[]" />
                            </td>

                            <td>

                            <input class="form-control" type="text" name="Quantity[]" />

                            </td>
                            <td>
                              <input class="form-control" type="text" name="Remarks[]" />
                          </td>
            
                        </tr>
                      
                    </tbody>
                </table>
<div class="text-center">
        <button type="submit" class="btn btn-primary border  rounded-0" style="margin-right: 5px">ADD</button>
        </div>
  </div>
  

</div>

</form>  

@include('inventory::layouts.sessionmessage')
 @endsection

@section('js')
@endsection
