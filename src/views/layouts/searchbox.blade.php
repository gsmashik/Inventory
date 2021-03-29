<i  type="button" data-toggle="modal" data-target="#exampleModal" class="fa fa-search "></i></a>
 

  


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Search Open Mould</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<form 
@if (Route::has('items.show'))
action="{{ route('items.create') }}"
@endif

method="POST" role="search">
@csrf
<div class="form-group">
<input type="text" class="form-control" name="title"
placeholder="Search Item No"> 
</div>
<div class="form-group">
<input type="text" class="form-control" name="description"
placeholder="Search Item Description "> 
</div>
<div class="form-group">
<input type="text" class="form-control" name="letering"
placeholder="Search Item Group No"> 
</div>
<div class="form-group">
<input type="text" class="form-control" name="buyers"
placeholder="Search Item Type"> 
</div>

<div class="form-group">
<span class="input-group-btn">
<button type="submit" class="btn btn-primary btn-block">
Search
</button>
</span>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

</div>
</div>
</div>
</div>

<!-- Modal -->	