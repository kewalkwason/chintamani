@extends('frontend.layouts.master')
@section('content')
    <section id="cta-section bgerasn">
        <div class="styl__pading"><br />
            <div class="av-container">
                <div class="av-columns-area">
                    <div class="av-column-5">
                        <div class="cta-content-wrap">
                            <div class="  app-download-content">
                                <img class="eee__card" src="{{ asset('frontend/images/userReg.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="av-column-7  ">
                        <div class="sidebar">
                            <aside id="widget-subscribe" class="widget widget_subscribe">
                                <h5 class="widget-title bigdas">DSA Login <span></span></h5>
                                    <form class="md-float-material form-material" method="POST" action="{{ route('dsa.login') }}">
                                        @csrf
                                        <div>
                                            <div class="av-columns-area">
                                                <div class="av-column-12">
                                                    <label>User-email</label>
                                                    <input type="email" class="mail-field form-control firim__css labeCss" placeholder="Enter Email Address" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="av-columns-area">
                                                <div class="av-column-12">
                                                    <label>Password</label>
                                                    <input type="password" class="mail-field form-control firim__css labeCss" placeholder="Password *" name="password" required autocomplete="current-password">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="form-field col-md-12 submitbtn">
                                                    <button type="submit" class="btn">Submit</button>
                                                </div>
                                            </div>
                                            <div class="form-results"></div>
                                        </div>
                                    </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
    <style type="text/css">
        textarea {
            border: 1px solid #8080806b;
            height: 132px;
            overflow: auto;
            resize: vertical;
            max-height: 100%;
        }

        .woo-sidebar .widget form input[type="search"],
        .sidebar .widget form input[type="search"],
        .sidebar .widget form input[type="email"],
        .sidebar .widget form input[type="text"] {
            background: #ffffff;
            border-radius: 10px;
            font-size: 15px;
        }
    </style>