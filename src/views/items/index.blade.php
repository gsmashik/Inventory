@extends('inventory::items.layout')

@section('content')

<table class="table table-light table-striped table-bordered ">

    <tbody>
    <tr>
        <td> <label class="form-check-label" for="1"> Item Code </label></td>
        <td><input class="form-control" type="text" name="" id="1"></td>
        <td> <label class="form-check-label" for="1"> Bar Code </label></td>
        <td><input class="form-control" type="text" name="" id="2"></td>
        <td> <label class="form-check-label" for="2" > Item Description </label> </td>
        <td><input class="form-control input-xs" type="text" name=""  id="2"></td>
       <td><div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck2">
        <label class="custom-control-label" for="customCheck2">Inventory Item</label>
      </div></td>
    </tr>
    </tbody>

</table>




@endsection

@section('js')
