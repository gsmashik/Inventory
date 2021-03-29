@if (@isset($moreoutput) && count($moreoutput) >0)
<div id="myModal" class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">SEARCH RESULT</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            @isset($moreoutput)
            <table class="table table-bordered">
                <thead class="">
                    <tr>
                        <th>Entry No</th>
                        <th>Item Code</th>
                        <th>Item Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($moreoutput as $moreoutput)
                    <tr>
                    <td><a class="" href="{{ route('items.edit',$moreoutput->DocEntry) }}">{{$moreoutput->DocEntry}}</a></td>
                        <td>{{ $moreoutput->ItemCode }}</td>
                        <td>{{ $moreoutput->ItemName }}</td>
                    </tr>
                    
                    @endforeach
                  
                </tbody>
         
            </table>
             
                @endisset
        </div>
    </div>
</div>
@endif