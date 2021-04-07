<!DOCTYPE html>
<html lang="en">
    
<head>
        
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/images/logo/logocirt.png">

    <!-- Bootstrap Css -->
    <link href="{{asset('tAdmin')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('tAdmin')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('tAdmin')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    
    <!-- DataTables -->
    <link href="{{asset('tAdmin')}}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('tAdmin')}}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{asset('tAdmin')}}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta/dist/css/bootstrap-select.min.css">
    <style>
        .ck-editor__editable {
            min-height: 300px;
        }
    </style>
</head>

<body data-sidebar="dark">
    <div id="layout-wrapper">

        @include('layouts.frontAdmins._navbar')

        @include('layouts.frontAdmins._sidebar')

        @yield('content')

    </div>
    
        <!-- JAVASCRIPT -->
        <script src="{{asset('tAdmin')}}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="{{asset('tAdmin')}}/assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="{{asset('tAdmin')}}/assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="{{asset('tAdmin')}}/assets/js/app.js"></script>

        <!-- Required datatable js -->
        <script src="{{asset('tAdmin')}}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{asset('tAdmin')}}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/jszip/jszip.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="{{asset('tAdmin')}}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta/dist/js/bootstrap-select.min.js"></script>

        <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>

        <!-- Datatable init js -->
        <script src="{{asset('tAdmin')}}/assets/js/pages/datatables.init.js"></script>
        @include('sweetalert::alert')
        

        {{-- <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script> --}}

        <script>
            ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .then( editor => {
                            console.log( editor );
                    } )
                    .catch( error => {
                            console.error( error );
                    } );
        </script>
        {{-- <script>
            $(document).ready(function(){
                $('#lfm').filemanager('image');
            });
        </script> --}}

        @yield('footer')
</body>

</html>