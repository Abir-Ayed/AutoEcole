<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Auto Ecole</title>
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
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('Admin/dist/css/skins/_all-skins.min.css')}}">




    <link rel="stylesheet" href="{{asset('Admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('Admin/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('Admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('Admin/dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        function printContent(e1){
            var restorepage=document.body.innerHTML;
            var printcontent=document.getElementById(e1).innerHTML;
            document.body.innerHTML=printcontent;


            window.print();
            document.body.innerHTML=restorepage;

        }
    </script>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="../index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>EC</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Auto Ecole</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->


                   
                    <!-- Notifications: style can be found in dropdown.less -->


                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('Admin/dist/img/user.png')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">Admin</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{'asset('Admin/dist/img/user.png')}}" class="img-circle" alt="User Image">

                                <p>
                                  
                                @if(Auth::check())
                                      {{Auth::user()->name}}
                                      @endif</p>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">

                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                   <a href="{{ route('logout') }}" class="btn btn-default btn-flat"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Déconnexion</a>
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                   
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->

    <!-- /.sidebar -->

    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('Admin/dist/img/user.png')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Admin</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> en ligne</a>
                </div>
            </div>

              <ul class="sidebar-menu" data-widget="tree">
<br>
               <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Acceuil</span>

                    </a>
</li>
 <li class="active">
                   <a href="auto_ecole">
                      <i class="fa fa-fw fa-home"></i>
                        <span>Auto Ecole</span>

              </a>
                </li>
 <li>
                   <a href="crudMoniteur">
                        <i class="fa fa-fw fa-users"></i>  
                        <span>Moniteurs</span>

              </a>
                </li>

                <li>
                   <a href="crudFormateur">
                        <i class="fa fa-fw fa-users"></i>  <span>Formateurs</span>
                 </a>
                </li>
   




                <li >
                    <a href="crudCandidats">
                        <i class="fa fa-fw fa-users"></i> <span>Candidats</span>

                    
</a>
                </li>
               <li class="treeview">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span>Séances</span>
                        <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="crudSeancePratique"><i class="fa fa-circle-o"></i>Séances Pratiques</a></li>
                        <li><a href="crudSeance"><i class="fa fa-circle-o"></i> Séances Théoriques</a></li>

                    </ul>
                </li>
                <li >
                    <a href="crudExamen">

                    <i class="fa fa-edit"></i>
                    <span>Examens</span>

                    </a>

                </li>
                 
                <li>
                                    <a href="crudResultat">
                                        <i class="fa fa-fw fa-graduation-cap"></i> <span>Résultats</span>
                                       
                </span>
                                    </a>

                                </li> 
                
                <li >
                                    <a href="crudFacture">
                                        <i class="fa fa-fw fa-calculator"></i> <span>Facture</span>

                </span>
                                    </a>

                                </li> 
   <li >

                    <a href="crudAlertes">
                      <i class="fa fa-bell-o"></i>

                        <span> Alertes</span>
</a>
                    </li>
     



            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
 <section class="content-header">
            <h1>
                Gestion Auto Ecoles
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Acceuil</a></li>
                <li><a href="http://localhost/Auto_ecole/public/auto_ecole">Gestion Auto Ecoles</a></li>
                <li><a href="http://localhost/Auto_ecole/public/editAuto/{id}">Modifier Auto Ecoles</a></li>

            </ol>
        </section>
        <!-- Main content -->
        <section class="content" style="margin-left: 400px;padding-top:100px;width: 1100px;height:100px;"
                 };
                 }>



            <div class="row">
                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-yellow">

                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">Auto Ecole</h3>

                        </div>
                        <div id="div1">
                            <div class="box-footer no-padding" >

                                    <ul class="nav nav-stacked"><br>

                                        <tr>

                                            <td><li><a href="#">Auto Ecole : {{$newAuto->nom}}</a></li>  </td>
                                            <td><li><a href="#">Adresse : {{$newAuto->adresse}}</a></li></td>
                                            <td><li><a href="#">Code postale : {{$newAuto->code_postale}}</a></li></td>
                                            <td><li><a href="#">Telephone : {{$newAuto->Num_tel}}</a> </li></td>
                                           </td><br><br>
                                            <td><li> <button type="button" class="btn btn-warning" onclick="printContent('div1')" style="margin-left: 100px;margin-top: -40px"> <i class="fa fa-print"></i> imprimer</button>


                                                </li></td>

                                        </tr>

                                    </ul>



                            </div>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- /.col -->

                <!-- /.col -->

            </div>
            <!-- /.row -->



        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- jQuery 3 -->
    <script src="{{asset('Admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('Admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('Admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('Admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('Admin/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('Admin/dist/js/demo.js')}}"></script>
</body>
</html>
