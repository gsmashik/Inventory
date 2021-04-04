@extends('inventory::layouts.layout')

@section('content')
@extends('inventory::layouts.menubar')
<form action="{{route('moneyreceipt.store')}}" method="post" id="form" >
                    @csrf

<div class="card">

  <div class="card-header">Money Receipt {{ Auth::user()->id }}</div>

  <div class="card-body">
                 
  <table class="table   table-bordered itemrow" id="rowtable">
                
             

                <thead class="">

                          <th>#</th>
                           
                            <th>Date  @error('Date.*')<i class="fa fa-exclamation-triangle fa-xs text-danger " aria-hidden="true"></i>  @enderror</th>
                            <th>Purpose</th>
                            <th>Quantity                              @error('Quantity.*')<i class="fa fa-exclamation-triangle fa-xs text-danger " aria-hidden="true"></i>  @enderror
 </th>
                            <th>ApplyBy</th>
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
                              <input class="form-control" type="text" name="applyby[]" />
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


<div class="card">
    <div class="card-header">
        <form action="{{route('moneyreceipt.find')}}" method="post" >
            @csrf

            <div class="form-group">
                <div class="col-sm-4 pull-left">
                    <input class="form-control datepicker" type="text" name="Date1" />
                </div>               
                
                <div class="col-sm-4 pull-left">
            <input class="form-control datepicker" type="text" name="Date2" />
                </div>


                <div class="col-sm-4 pull-left">
                    <button type="submit" class=" btn-primary border  rounded-0" style="margin-right: 5px">Get Data</button>
                </div>
            </div>
            


        </form>
    </div>

  
</div>
<form action="{{route('moneyreceipt.updateall')}}" method="post" >
    @csrf
<table class="table   table-bordered ">
    <thead class="">
        <tr>
            <th>#</th>
            <th>Date</th>
        <th>Purpose</th>
        <th>Amount</th>
        <th>ApplyBy</th>
        <th>Remarks</th>
        <th>Status </th>
        
        </tr>
    </thead>
    <tbody>

    @foreach($moneyreceipt as $key => $data  )
   
        <tr>
        <td class="text-center">{{$key+1}} <input class=" invisible" style="width: 0px;"  type="text" value="{{$data->id}}" name="id[]"   /></td>
        <td><input class="form-control datepicker"  type="text" value="{{$data->Date}}" name="Date[]" disabled /></td>
        <td><input class="form-control "  type="text" value="{{$data->Purpose}}" name="Purpose[{{$data->id}}]" disabled /></td>
        <td><input class="form-control "  type="text" value="{{$data->Quantity}}" name="Quantity[{{$data->id}}]" disabled /></td>
        <td><input class="form-control "  type="text" value="{{$data->ApplyBy}}" name="ApplyBy[{{$data->id}}]" disabled /></td>
        <td><input class="form-control "  type="text" value="{{$data->Remarks}}" name="Remarks[{{$data->id}}]" disabled /></td>

     
        <td>

<input name="approved[]" type="checkbox"   /> checkbox</label>
     
<input type="hidden" name="approved[]" value="">

               
         </td>
        </tr>

        @endforeach
    </tbody>

</table>
<div class="text-center">
    <button type="submit" class="btn btn-primary border  rounded-0" style="margin-right: 5px">Update</button>
</form>
</div>
@include('inventory::layouts.sessionmessage')
 @endsection

@section('js')
<script>
// $('input[type="checkbox"]').on('change', function(e){
//         if($(this).prop('checked'))
//         {
//             $(this).next($('input[type=hidden]')).removeAttr('name');
            
//         } else {
//             $(this).next($('input[type=hidden]')).value('1');
//         }
// });
</script>
@endsection
