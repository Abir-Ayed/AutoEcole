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
     <link rel="stylesheet" href="{{asset('Admin/bower_components/morris.js/morris.css')}}">
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
                            <span class="hidden-xs">
                              @if ((Auth::user()->role==='admin'))
                            Admin
                            @endif
                               @if ((Auth::user()->role==='moderateur'))
                            Moderateur
                            @endif
                             @if ((Auth::user()->role==='candidat'))
                            Candidat
                            @endif
                        </span>
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


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        



        <!-- Main content -->

            <!-- Main content -->
            <section class="content">
               

                    <!-- /.content-wrapper -->


                    <!-- Control Sidebar -->
                    <aside class="control-sidebar control-sidebar-dark">
                        <!-- Create the tabs -->
                        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Home tab content -->
                            <div class="tab-pane" id="control-sidebar-home-tab">
                                <h3 class="control-sidebar-heading">Recent Activity</h3>
                                <ul class="control-sidebar-menu">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                            <div class="menu-info">
                                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                                <p>Will be 23 on April 24th</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="menu-icon fa fa-user bg-yellow"></i>

                                            <div class="menu-info">
                                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                                <p>New phone +1(800)555-1234</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                            <div class="menu-info">
                                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                                <p>nora@example.com</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                            <div class="menu-info">
                                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                                <p>Execution time 5 seconds</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.control-sidebar-menu -->

                                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                                <ul class="control-sidebar-menu">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <h4 class="control-sidebar-subheading">
                                                Custom Template Design
                                                <span class="label label-danger pull-right">70%</span>
                                            </h4>

                                            <div class="progress progress-xxs">
                                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <h4 class="control-sidebar-subheading">
                                                Update Resume
                                                <span class="label label-success pull-right">95%</span>
                                            </h4>

                                            <div class="progress progress-xxs">
                                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <h4 class="control-sidebar-subheading">
                                                Laravel Integration
                                                <span class="label label-warning pull-right">50%</span>
                                            </h4>

                                            <div class="progress progress-xxs">
                                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <h4 class="control-sidebar-subheading">
                                                Back End Framework
                                                <span class="label label-primary pull-right">68%</span>
                                            </h4>

                                            <div class="progress progress-xxs">
                                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.control-sidebar-menu -->

                            </div>
                            <!-- /.tab-pane -->
                            <!-- Stats tab content -->
                            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                            <!-- /.tab-pane -->
                            <!-- Settings tab content -->
                            <div class="tab-pane" id="control-sidebar-settings-tab">
                                <form method="post">
                                    <h3 class="control-sidebar-heading">General Settings</h3>

                                    <div class="form-group">
                                        <label class="control-sidebar-subheading">
                                            Report panel usage
                                            <input type="checkbox" class="pull-right" checked>
                                        </label>

                                        <p>
                                            Some information about this general settings option
                                        </p>
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group">
                                        <label class="control-sidebar-subheading">
                                            Allow mail redirect
                                            <input type="checkbox" class="pull-right" checked>
                                        </label>

                                        <p>
                                            Other sets of options are available
                                        </p>
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group">
                                        <label class="control-sidebar-subheading">
                                            Expose author name in posts
                                            <input type="checkbox" class="pull-right" checked>
                                        </label>

                                        <p>
                                            Allow the user to show his name in blog posts
                                        </p>
                                    </div>
                                    <!-- /.form-group -->

                                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                                    <div class="form-group">
                                        <label class="control-sidebar-subheading">
                                            Show me as online
                                            <input type="checkbox" class="pull-right" checked>
                                        </label>
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group">
                                        <label class="control-sidebar-subheading">
                                            Turn off notifications
                                            <input type="checkbox" class="pull-right">
                                        </label>
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group">
                                        <label class="control-sidebar-subheading">
                                            Delete chat history
                                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                                        </label>
                                    </div>
                                    <!-- /.form-group -->
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                    </aside>

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
                                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
 <li></li><br>
  @if ((Auth::user()->role==='admin')||(Auth::user()->role==='moderateur')
                ||(Auth::user()->role==='candidat'))
<li >
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Acceuil</span>

                    </a>
</li>
 @endif     
 @if ((Auth::user()->role==='admin')||(Auth::user()->role==='moderateur'))        
 <li  class="active">
                   <a href="crudMoniteur">
                        <i class="fa fa-fw fa-users"></i>  
                        <span>Moniteurs</span>

              </a>
                </li>

                <li class="active">
                   <a href="crudFormateur">
                        <i class="fa fa-fw fa-users"></i>  <span>Formateurs</span>
                 </a>
                </li>
   




                <li  class="active">
                    <a href="crudCandidats">
                        <i class="fa fa-fw fa-users"></i> <span>Candidats</span>

                    
</a>
                </li>
                @endif
                @if ((Auth::user()->role==='admin')) 
                <li class="treeview active">
                                    <a href="#">
                                        <i class="fa fa-fw fa-car"></i> <span>Véhicules</span>
                                       
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
                <li class="treeview active">
                                    <a href="#">
                                        <i class="fa fa-fw fa-graduation-cap"></i> <span>Résultats</span>
                                       
                                    </a>

                                </li> 
                                <li class="active">
                                    <a href="#">
                                        <i class="fa fa-fw fa-calculator"></i> <span>Facture</span>
                                        <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                                    </a>

                                </li> 
        @endif
        @if ((Auth::user()->role==='moderateur'))
        <li class="active">
                   <a href="crudAuto">
                      <i class="fa fa-fw fa-users"></i> 
                        <span>Moderateurs</span>

              </a>
                </li>   
           <li class="active">
                   <a href="crudAuto">
                       <i class="fa fa-fw fa-users"></i> 
                        <span>Admins</span>

              </a>
                </li>
                <li class="active">
                   <a href="auto_ecole">
                      <i class="fa fa-fw fa-home"></i>
                        <span>Auto Ecole</span>

              </a>
                </li>
                @endif
              @if ((Auth::user()->role==='candidat'))    
            
                <li class="active">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span>Réserver séances</span>
                        <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i>Séances Pratiques</a></li>
                        <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Séances Théoriques</a></li>

                    </ul>
                </li>

                 <li class="active">
                    <a href="crudExamen">

                    <i class="fa fa-edit"></i>
                    <span>Sélectionner auto ecole</span>

                    </a>

                </li>
                 <li class="active">
                    <a href="crudExamen">

                    <i class="fa fa-edit"></i>
                    <span>Planning examens</span>

                    </a>

                </li>
                <li class="active" >
                    <a href="crudExamen">

                    <i class="fa fa-edit"></i>
                    <span>Planning séance</span>

                    </a>

                </li>
                
                  <li class="active">
                    <a href="crudExamen">

                    <i class="fa fa-edit"></i>
                    <span>Consulter résultat examens</span>

                    </a>

                </li>
                
                
                <li class="active">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span> Paiements</span>
</a>
                    </li>
@endif
 @if ((Auth::user()->role==='admin'))    
                <li class="active">

                    <a href="#">
                      <i class="fa fa-bell-o"></i>

                        <span> Alertes</span>
</a>
                    </li>

 @endif
    

            </ul>
     





                        </section>
                        <!-- /.sidebar -->
                    </aside>
                    <!-- /.control-sidebar -->
                    <!-- Add the sidebar's background. This div must be placed
                         immediately after the control sidebar -->
                 
    <!-- Main content -->
     <!-- Main content -->
      @if ((Auth::user()->role==='admin'))  
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3></h3>

              <h2>Candidats</h2>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i></i>
            </div>
            <a href="crudCandidats" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><sup style="font-size: 20px"></sup></h3>

             <h2>Moniteurs</h2>
            </div>
            <div class="icon">
               <i class="ion ion-person-add"></i>
            </div>
            <a href="crudMoniteur" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3></h3>

              <h2>Formateurs</h2>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="crudFormateur" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3></h3>
              

              <h2>Véhicules</h2>
            </div>
            <div class="icon">
                <i class="fa fa-fw fa-car"></i>
            </div>
            <a href="crudVehicule" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-navy">
            <div class="inner">
              <h3><sup style="font-size: 20px"></sup></h3>

             <h2>Examens</h2>
            </div>
            <div class="icon">
                <i class="fa fa-edit"></i>
            </div>
            <a href="crudVehicule" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><sup style="font-size: 20px"></sup></h3>

             <h2>Alertes</h2>
            </div>
            <div class="icon">
               <i class="fa fa-bell-o"></i>

            </div>
            <a href="crudAlerte" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><sup style="font-size: 20px"></sup></h3>

             <h2>Résultats</h2>
            </div>
            <div class="icon">
 <i class="fa fa-fw fa-graduation-cap"></i>             </div>
            <a href="crudResultat" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><sup style="font-size: 20px"></sup></h3>

             <h2>Facture</h2>
            </div>
            <div class="icon">
                <i class="fa fa-fw fa-calculator"></i>
            </div>
            <a href="crudFacture" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       
          
        </div>
        <!-- /.col -->
      
 
        <div class="col-md-6">
          <!-- Info Boxes Style 2 -->
         <div class="info-box">
            <span class="info-box-icon bg-aqua"> <i class="fa fa-fw fa-car"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Vehicules</span>
              <span class="info-box-number">{{$vehicule}}<small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
       
          <div class="info-box">
            <span class="info-box-icon bg-red"> <i class="fa fa-bell-o"></i>
</span>

            <div class="info-box-content">
              <span class="info-box-text">Alertes</span>
              <span class="info-box-number">{{$alerte}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </div>
                  <div class="col-md-6">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Statisques de septembre 2018</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Tâche</th>
                  <th>Evolution</th>
                  <th style="width: 40px">Pourcentage(%)</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Candidats</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width:{{$som}}%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">{{$som}}%</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Moniteurs</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: {{ $somMoniteur}}%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-yellow">{{ $somMoniteur}}%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Formateurs</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width:{{$somFormteur}}%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">{{$somFormteur}}%</span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Séances</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width:{{$seance}}%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green">{{$seance}}%</span></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row -->
     
       
    </section>
@endif
                <!-- ./wrapper -->

                <!-- jQuery 3 -->
                <script src="{{asset('Admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
                <!-- Bootstrap 3.3.7 -->
                <script src="{{asset('Admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

                <!-- DataTables -->
                
<script src="{{asset('Admin/bower_components/fastclick/lib/fastclick.js')}}"></script>

                <script src="{{asset('Admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
                <script src="{{asset('Admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
                <!-- SlimScroll -->
                <script src="{{asset('Admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

                <!-- FastClick -->
                
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
