$(document).on('click', '#addRowButton', function() {
    var table = $('#rowtable'),
        lastRow = table.find('tbody tr:first '),
        rowClone = lastRow.clone();
      
        

    table.find('tbody').append(rowClone).val("");
    
});
    
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



// for datepicker
$( "#datepicker, #datepicker2,#datepicker3" ).datepicker();
// For Data Table
        $('#table1').DataTable({  
             
             pageLength: 2000000,
			 scrollY: 600,
			 "bLengthChange": false
            });



// Add Row on Button click
    var counter = 2;
    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td style="padding: 0px;margin:0;" >' + counter + '</td>';
        cols += '<td style="padding: 0px;margin:0;" ><input type="text" class="form-control input-sm"  name="title[]" id=""></td>';
		cols += '<td style="padding: 0px;margin:0;" ><input type="text" class="form-control input-sm"  name="letering[]" id=""></td>';
        cols += '<td style="padding: 0px;margin:0;" ><input type="text" class="form-control input-sm" name="description[]" id=""></td>';

        cols += '<td style="padding: 0px;margin:0;" ><input type="text" class="form-control input-sm" name="dimention[]" id=""></td>';

        cols += '<td style="padding: 0px;margin:0;" ><input type="text" class="form-control input-sm"  name="color[]" id=""></td>';

        cols += '<td style="padding: 0px;margin:0;" ><input type="text" class="form-control input-sm" name="buyers[]" id=""></td>';
        cols += '<td style="padding: 0px;margin:0;" ><input type="file" class="form-control input-sm" name="image[]" id=""></td>';
        

        cols += '<td style="padding: 0px;margin:0;" ><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("#myTable").append(newRow);
        counter++;
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






