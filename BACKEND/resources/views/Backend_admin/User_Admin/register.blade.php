<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="icon" href="{{ asset('gentelella/production/images/favicon.ico') }}" type="image/ico" />
    
        <title>@yield('title')</title>
    
        <!-- Bootstrap -->
        <link href="{{ asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('gentelella/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset('gentelella/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
        <!-- iCheck -->
        <link href="{{ asset('gentelella/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
        
        <!-- bootstrap-progressbar -->
        <link href="{{ asset('gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
        <!-- JQVMap -->
        <link href="{{ asset('gentelella/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="{{ asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    
        <!-- Custom Theme Style -->
        <link href="{{ asset('gentelella/build/css/custom.min.css') }}" rel="stylesheet">
      </head>

    <body class="login">
        <div>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form class="form-signin" method="POST" action="{{ route('register')}}">
                            {{ csrf_field()}}
                            <h1>Create Account</h1>
                            <div>
                                <input type="text" name="name" id="inputName" value="{{ old('name')}}" class="form-control {{ $errors->has('name')}}" placeholder="User Name" required="" />
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name')}}
                                    </div>
                                @endif
                            </div>
                            <div>
                                <input type="email" name="email" id="inputEmail" value="{{ old('email')}}" class="form-control {{ $errors->has('email')}}" placeholder="Email Address" required="" />
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email')}}
                                    </div>
                                @endif
                            </div>
                            <div>
                                <input type="password" name="password" id="inputPassword" value="{{ old('password')}}" class="form-control {{ $errors->has('password')}}" placeholder="Password" required="" />
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password')}}
                                    </div>
                                @endif
                            </div>
                            
                            <div>
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-sign-in cc_pointer"></i> 
                                    <br>
                                    <p>submit</p>
                                </button>
                            </div>
                            
                            
                            <div class="separator"></div>
                        </form>
                    </section>

                    {{-- yang asli
                    <section class="login_content">
                        <form>
                            <h1>Create Account</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                                <a class="btn btn-default submit" href="index.html">Submit</a>
                            </div>

                            <div class="separator"></div>
                        </form>
                    </section> --}}
                </div>
            </div>
        </div>
    </body>
</html>
