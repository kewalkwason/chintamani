<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chintamani dashboard </title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/files/assets/pages/chart/radial/css/radial.css')}}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/icon/feather/css/feather.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/css/jquery.mCustomScrollbar.css')}}">
    <link rel="icon" href="{{asset('assets/images/faviocn.png')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/bower_components/switchery/dist/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/bower_components/owl.carousel/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/bower_components/owl.carousel/dist/assets/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/css/chinamani.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/css/linearicons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/css/jquery.mCustomScrollbar.css')}}">

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="text-center">
                        <img src="{{ asset('assets/files/assets/images/logo.png')}}" alt="logo.png">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center">Admin Login</h3>
                                </div>
                            </div>
                            <div class="form-group form-primary">
                                <input id="inputEmailAddress" type="email" class="form-control" placeholder="jhon@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group form-primary">
                                <input id="password" type="password" class="form-control border-end-0" name="password" required autocomplete="current-password" placeholder="Enter Password"><a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row m-t-25 text-left">
                                <div class="col-12">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="remember" id="flexSwitchCheckChecked" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div class="forgot-phone text-right f-right">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-right f-w-600">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Thank you.</p>
                                    <p class="text-inverse text-left"><a href="https://www.chintamanifinlease.com/" target="_blank"><b class="f-w-600">Back
                                                to website</b></a>
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ asset('assets/files/assets/images/auth/Logo-small-bottom.png')}}" alt="small-logo.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
