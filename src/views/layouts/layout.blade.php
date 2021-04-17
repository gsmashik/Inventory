<!DOCTYPE html>
<html lang="en" class="theme-light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{asset('public/olee/inventory/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('public/olee/inventory/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('public/olee/inventory/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('public/olee/inventory/jquery.dataTables.min.css')}}">

<link rel="stylesheet" href="{{asset('public/olee/inventory/css/lightbox.min.css')}}">

<link rel="stylesheet" href="{{asset('public/olee/inventory/css/colReorder.dataTables.min.css')}}">

<link rel="stylesheet" href="{{asset('public/olee/inventory/css/style.css')}}">
<link rel="stylesheet" href="{{asset('public/olee/inventory/css/menubar.css')}}">
<link rel="stylesheet" href="{{asset('public/olee/inventory/css/tabs.css')}}">
<link rel="stylesheet" href="{{asset('public/olee/inventory/css/color.css')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
 @yield('css')
</head>
<body>
@yield('content') 

<script src="{{ asset('public/olee/inventory/js/jquery-1.12.4.js') }}"></script>
<script src="{{ asset('public/olee/inventory/js/popper.min.js') }}"></script>
<script src="{{ asset('public/olee/inventory/js/bootstrap.min.js') }}"></script>


<!--  Context Menu -->

<!-- DAtatable -->
<script src="{{ asset('public/olee/inventory/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/olee/inventory/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/olee/inventory/js/dataTables.colReorder.min.js') }}"></script>
<script src="{{ asset('public/olee/inventory/js/dataTables.rowReorder.min.js') }}"></script>
<script src="{{ asset('public/olee/inventory/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('public/olee/inventory/js/sweetalert.min.js') }}"></script>

      
    <script src=
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script><!-- Scripts -->
    <script src="{{ asset('public/olee/inventory/js/inventory.js') }}" defer></script>


<script>
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
</script>


@yield('js') 
</body>
</html>