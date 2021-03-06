<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="shortcut icon" href="assets/welcome/img/logo.png" type="image/x-icon" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/dashboard/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dashboard/css/atlantis.css">

    <!-- Fonts and icons -->
    <script src="assets/dashboard/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['assets/dashboard/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    
</head>

<body class="login">
    <div class="wrapper wrapper-login">
        <div class="row">
            <div class="col">
                @if (session()->has('loginError'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('loginError') }}
                    </div>
                @endif
                <div class="container container-login animated fadeIn">
                    <h3 class="text-center">Masuk Ke Dashboard</h3>
                    <div class="login-form">
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="username" class="placeholder"><b>Username</b></label>
                                <input id="username" name="username" type="text"
                                    class="form-control  @error('username')
								is-invalid                                        
								@enderror"
                                    required autofocus value="{{ old('username') }}">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="placeholder"><b>Password</b></label>
                                {{-- <a href="#" class="link float-right">Forget Password ?</a> --}}
                                <div class="position-relative">
                                    <input id="password" name="password" type="password"
                                        class="form-control  @error('password')
									is-invalid                                        
									@enderror"
                                        required value="{{ old('password') }}">
                                    {{-- <div class="show-password">
										<i class="icon-eye"></i>
									</div> --}}
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-action-d-flex">
                                {{-- <div class="custom-control custom-checkbox"> --}}
                                {{-- <input type="checkbox" class="custom-control-input" id="rememberme"> --}}
                                {{-- <label class="custom-control-label m-0" for="rememberme">Remember Me</label> --}}
                                {{-- </div> --}}
                                <button type="submit"
                                    class="btn btn-primary col-md-12 float-right mt-3 mt-sm-0 fw-bold">Masuk</button>
                            </div>
                            {{-- <div class="login-account">
								<span class="msg">Don't have an account yet ?</span>
								<a href="#" id="show-signup" class="link">Sign Up</a>
							</div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/dashboard/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/dashboard/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/dashboard/js/core/popper.min.js"></script>
    <script src="assets/dashboard/js/core/bootstrap.min.js"></script>
    <script src="assets/dashboard/js/atlantis.min.js"></script>
</body>

</html>
