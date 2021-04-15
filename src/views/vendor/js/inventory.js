/*
 * Click Plus Icon Add Row As Last Item
 * 
 */
$(document).on('click', '#addRowButton', function() {
    var table = $('#rowtable'),
        lastRow = table.find('tbody tr:first '),
        rowClone = lastRow.clone();
    table.find('tbody').append(rowClone).val("");
    
});



   var path = "{{ route('autocomplete') }}";

    $('input.itemcode').typeahead({

        source:  function (query, process) {

        return $.get(path, { query: query }, function (data) {

                return process(data);
				

            }
			);

        }


    }
	);

           
$('input[type="checkbox"]').on('change', function(e){
    if($(this).prop('checked'))
    {
        $(this).next($('input[type=hidden]')).removeAttr('name');
        
    } else {
        $(this).next($('input[type=hidden]')).value('1');
    }
});


    $('input[type=checkbox]:checked').each(function(index){
        $(this).next($('input[type=hidden]')).removeAttr('name');
});


 
/* 
 Datepicker Multiple Input Field 
 */


 $('.datepicker').each(function(){
    $(this).datepicker({dateFormat: "yy-mm-dd"});
});
  
/* 
  For Modal Open
 */
$("#myModal").modal('show');







$(document).ready(function () {
// For Datatable
$('.itemrow').DataTable({
    paging: false,
    searching: false,
    info: false,
    "ordering": false,
    colReorder : true,
    rowReorder: true,
    stateSave:  true
   
} );






// For Data Table
        $('#table1').DataTable({  
             
             pageLength: 2000000,
			 scrollY: 600,
			 "bLengthChange": false
            });


        



// delete button click remove row 
    $("#myTable").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


// Image Light Box Click Popup
    lightbox.option({
      'positionFromTop': 250,
      'showImageNumberLabel' :false
      
    })

});






