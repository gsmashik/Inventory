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



/* 
 Datepicker Multiple Input Field 
 */
$('.datepick').each(function(){
    $(this).datepicker();
});


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






