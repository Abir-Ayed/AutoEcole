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
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('Admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('Admin/dist/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>EC</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Auto Ecole</b></span>
        </a>
        <!-- Header Navbar:e style can be found in header.less -->
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

                    <!-- Tasks: style can be found in dropdown.less -->

                    <!-- User Account: style can be found in dropdown.less -->
                     <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('Admin/dist/img/user.png')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">
                               
                             
                            Moderateur
                           
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{asset('Admin/dist/img/user.png')}}" class="img-circle" alt="User Image">

                             <p>
                                
                                @if(Auth::check())
                                      {{Auth::user()->name}}
                                      @endif</p>
                            </li>
                            <!-- Menu Body -->

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
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
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
                    <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
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
        <section class="content">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Modifier Auto Ecoles</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
            <form role="form" action="{{url("/editAuto/".$newAuto->id)}}" method="POST">
            {{ csrf_field() }}
            <!-- text input -->

                <div class="form-group">
                    <label>Auto Ecole</label>
                    <input type="text" class="form-control" name="nom"  placeholder=" entrer auto ecole" value="{{$newAuto->nom}} ">
                 
                </div>
                <div class="form-group">
                    <label>Adresse</label>
                    <input type="text" class="form-control" name="adresse"  placeholder=" entrer adresse" value="{{$newAuto->adresse}} ">
                 
                </div>
                 <div class="form-group">
                    <label>Code postale</label>
                    <input type="text" class="form-control" name="code_postale"  placeholder=" entrer code postale" value="{{$newAuto->code_postale}} ">
                 
                </div>

               
                <div class="form-group">
                    <label>Telephone</label>
                    <input type="tel" class="form-control"  name="Num_tel" placeholder="entrer votre telephone"  value="{{$newAuto->Num_tel}} ">
                 
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
                    <input type="submit"  class="btn btn-primary btn-warning" value="Enregistrer">

                </div>
            </form>


                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->

        </section>


            <!-- Main content -->

    </div>


    <!-- Control Sidebar -->
    
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('Admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('Admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('Admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('Admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('Admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('Admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('Admin/dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
</body>
</html>
