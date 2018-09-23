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
                            <img src="Admin/dist/img/user.png" class="user-image" alt="User Image">
                            <span class="hidden-xs">User</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="Admin/dist/img/user.png" class="img-circle" alt="User Image">

                                <p>
                                    @if(Auth::check())
                                      {{Auth::user()->name}}
                                      @endif
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                 <a href="{{ route('logout') }}" class="btn btn-default btn-flat"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Déconnexion</a>
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


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion  Examens
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Acceuil</a></li>
                <li><a href="http://localhost/Auto_ecole/public/crudExamen">Gestion Examens</a></li>
                <li><a href="http://localhost/Auto_ecole/public/ajoutExamen">Ajouter Examens</a></li>

            </ol>
        </section>



        <!-- Main content -->
        <section class="content">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Ajouter examens</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form"   action="{{route('examenajout')}}" method="POST">
                    {{ csrf_field() }}
                    <!-- text input -->

                  <div class="form-group">
                            <label>Liste Candidats</label><br>

                            <select name="Liste_candidats" class="form-control">
                                    @foreach($cand as $liste)
                                        <option >
                                            {{$liste->nom}}

                                        
                                        </option>
                                    @endforeach


                                </select>

                        </div>

                        <div class="form-group">
                            <label>Date Examen</label>
                            <input type="date" class="form-control" name="Date_Examen" placeholder=" entrer date ">

                        </div>
                        <div class="form-group">
                            <label>Type Examen</label>

                            <select class="form-control" name="Type_Examen" class="form-control">
                                <option value="Examen théorique">Examen théorique</option>
                                <option value="Examen pratique">Examen pratique</option>


                            </select>
                        </div>

                        <div class="form-group">
                            <label>Horaire</label>
                            <input type="time" class="form-control"  name="horaire" placeholder="entrer horaire">

                        </div>

                        <div class="modal-footer">
                            <input type="reset" class="btn btn-default pull-left" data-dismiss="modal" value="Fermer">
                            <input type="submit"  class="btn btn-primary btn-warning" value="Enregistrer">

                        </div>
                    </form>



        </section>



                    <!-- Control Sidebar -->
                  
                    <aside class="main-sidebar">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                                <div class="pull-left image">
                                    <img src="Admin/dist/img/user.png" class="img-circle" alt="User Image">
                                </div>
                                <div class="pull-left info">
                                    <p>User</p>
                                    <a href="#"><i class="fa fa-circle text-success"></i>en ligne</a>
                                </div>
                            </div>
                            <!-- search form -->
                            <form action="#" method="get" class="sidebar-form">
                                <div class="input-group">


                                </div>
                            </form>
                            <!-- /.search form -->
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class="sidebar-menu" data-widget="tree">
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
                <li class="active">
                    <a href="crudExamen">

                    <i class="fa fa-edit"></i>
                    <span>Examens</span>

                    </a>

                </li>
                 
                <li >
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
     




 
     



                        </section>
                        <!-- /.sidebar -->
                    </aside>
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
