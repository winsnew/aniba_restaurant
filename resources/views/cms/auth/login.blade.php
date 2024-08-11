<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aniba</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('cms/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('cms/css/adminlte.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="hold-transition login-page" style="height: auto; padding-top: 25vh;">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Aniba</b></a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <form action="" id="form-login">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="email" id="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                        <!-- <div class="forgot-password">
                            <a href="#">Forgot Password?</a>
                        </div> -->
                    </div>
                </div>

                <div class="col-4 float-right">
                    <button form="form-login" class="btn btn-login btn-block btn-primary">LOGIN</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('cms/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('cms/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('cms/plugins/sweetalert2/sweetalert2-1.all.min.js')}}"></script>
    <script>
        $(document).ready(function() {

            $('#form-login').submit(function(e) {
                e.preventDefault();
                var email = $("#email").val();
                var password = $("#password").val();
                var token = $("meta[name='csrf-token']").attr("content");

                if (email.length == "") {

                    Swal.fire({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Email Address is Required !'
                    });

                } else if (password.length == "") {

                    Swal.fire({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Password is Required !'
                    });

                } else {

                    $.ajax({

                        url: "{{ route('proses_login') }}",
                        type: "POST",
                        dataType: "JSON",
                        cache: false,
                        data: {
                            "email": email,
                            "password": password,
                            "_token": token
                        },

                        success: function(response) {

                            if (response.success) {

                                Swal.fire({
                                        type: 'success',
                                        title: 'Login Success !',
                                        // text: 'Anda akan di arahkan dalam 3 Detik',
                                        // timer: 3000,
                                        showCancelButton: false,
                                        showConfirmButton: true
                                    })
                                    .then(function() {
                                        window.location.href =
                                            "{{ url('admin/home') }}";
                                    });

                            } else {

                                console.log(response.success);

                                Swal.fire({
                                    type: 'error',
                                    title: 'Login Failed!',
                                    text: 'please try again!'
                                });

                            }

                            console.log(response);

                        },

                        error: function(response) {

                            Swal.fire({
                                type: 'error',
                                title: 'Login Failed',
                                text: 'please check your email & password!'
                            });

                            console.log(response);

                        }

                    });

                }

            });

        });
    </script>



</body>

</html>