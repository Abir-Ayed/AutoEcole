 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('Admin/dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('Admin/plugins/iCheck/square/blue.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<body class="hold-transition register-page">
<div class="register-box" style="margin-top: 30px;">
    <div class="register-logo" >
        <a href="../../index2.html"><b>Auto Ecole</b></a>
    </div>

    <div class="register-box-body" style="width: 400px;margin-top: 20px">
        <p class="login-box-msg">Enregistrer un nouvel abonnement</p>

        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @csrf


            <div class="form-group has-feedback">



                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"   placeholder="nom complet" required autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>



                    <div class="form-group has-feedback">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="Email" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>







                    <div class="form-group has-feedback">
                    <input id="email" type="date" class="form-control{{ $errors->has('date_naissance') ? ' is-invalid' : '' }}" name="date_naissance" value="{{ old('date_naissance') }}"   placeholder="Date de naissance " required>
                    <span class="glyphicon glyphicon-calendar  form-control-feedback"></span>
                    @if ($errors->has('date_naissance'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date_naissance') }}</strong>
                                    </span>
                    @endif
                </div>






                    <div class="form-group has-feedback">
                    <select  class="form-control"   name="role" placeholder="Role"  >
                        <option>admin</option>
                        <option>moderateur</option>
                        <option>moniteur</option>
                        <option>candidat</option>
                        <option>formateur</option>
                    </select>


            </div>





                    <div class="form-group has-feedback">
                    <input id="email" type="tel" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}"   placeholder="telephone" required>
                    <span class="glyphicon glyphicon-phone  form-control-feedback"></span>
                    @if ($errors->has('telephone'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                    @endif

            </div>





                    <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="mot de passe " required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback"  role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>




                    <div class="form-group has-feedback">

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"   placeholder="confirmer le mot de passe"required>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>


            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>

      
        <a href="login" class="text-center">J'ai déjà un abonnement</a>
    </div>
    <!-- /.form-box -->
</div>
<script src="{{asset('Admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('Admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('Admin/plugins/iCheck/icheck.min.js')}}"></script>

</body>
</html>