<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Aniba | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('cms/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('cms/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <!-- <link rel="stylesheet" href="{{asset('cms/plugins/datatables/dataTables.bootstrap4.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('cms/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('cms/jquery-ui/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/jquery-ui/jquery-ui.structure.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/jquery-ui/jquery-ui.theme.css') }}">

    <style>
        .wrapper .content-wrapper{
            height: auto !important;
        }   
    </style>
</head>

<body class=" hold-transition sidebar-mini layout-fixed" style="height: auto !important">
    <div class="wrapper" style="height: auto !important;">
        @include('cms.component.sidebar')
        @yield('content')
        @include('cms.component.footer')
    </div>
    @yield('modal')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{asset('cms/plugins/jquery/jquery.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('cms/js/adminlte.min.js') }}"></script>
    <script src="{{asset('cms/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('cms/plugins/sweetalert2/sweetalert2-1.all.min.js')}}"></script>
    <script src="{{ asset('cms/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('cms/ckeditor/adapters/jquery.js') }}"></script>
    <script src="{{ asset('cms/jquery-ui/jquery-ui.js') }}"></script>

    @stack('js')
    <script>
        $('#logout').on("click", function() {

            Swal.fire({
                title: 'Are you sure?',
                html: "You want to logout ",
                icon: 'info',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then(function(e) {
                if (e.value === true) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        type: 'GET',
                        url: "{{url('logout')}}",
                        data: {
                            _token: CSRF_TOKEN
                        },
                        // dataType: 'JSON',
                        success: function(results) {
                            Swal.fire("Done!", results.message, "success");
                            window.location.href = "{{ url('/admin') }}";
                        }
                    });
                } else {
                    e.dismiss;
                }

            }, function(dismiss) {
                return false;
            })
        });
    </script>
</body>

</html>