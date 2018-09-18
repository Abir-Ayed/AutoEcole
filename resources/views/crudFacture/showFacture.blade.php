<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Data Tables</title>
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
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                            page and may cause design problems
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="Admin/dist/img/user.png" class="user-image" alt="User Image">
                            <span class="hidden-xs">Admin</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="Admin/dist/img/user.png" class="img-circle" alt="User Image">

                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
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
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Facture
        @foreach($facture as $newFacture)
        <small></small>@endforeach
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Acceuil</a></li>
        <li><a href="#">Ajouter Facture</a></li>
        <li class="active">Facture</li>
      </ol>
    </section>

    <div class="pad margin no-print">
      <div class="alert alert-success alert-dismissible" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
       vous devez obligatoirement apporter cette facture avant de passer votre examen
      </div>
    </div>

 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            Candidat : {{$newFacture->candidat }} 
            <small class="pull-right">Numéro de facture:#000 {{$newFacture->id }}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
    
      <!-- /.row -->

      <!-- Table row -->
     

      <div class="row">
        <!-- accepted payments column -->
       
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Date facture {{$newFacture->date_facture }} </p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Montant totale:</th>
                <td>$ {{ $newFacture->montant_totale}}</td>
              </tr>
              <tr>
                <th>Montant payé</th>
                <td>${{ $newFacture->montant_paye }} </td>
              </tr>
              <tr>
                <th>Montant restant</th>
                <td>${{ $newFacture->montant_restant}}</td>
              </tr>
             
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <button type="button" class="btn btn-warning" onclick="printContent('div1')" style="margin-left: 900px;margin-top: -40px"> <i class="fa fa-print"></i> imprimer</button>
         
        </div>
      </div>
    </section>
    <!-- Content Wrapper. Contains page content -->
  



        <!-- Main content -->

            <!-- Main content -->

                    <!-- /.box -->


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

                                <li >
                                
                                    <a href="/moniteur/Moniteur">
                                        <i class="fa fa-dashboard"></i> <span>Acceuil</span>

                                    </a>
                                </li>

                                <li >
                                    <a href="crudCandidats">
                                        <i class="fa fa-fw fa-users"></i> <span>Candidats</span>

                                    </a>

                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-files-o"></i>
                                        <span> Consulter Paiements</span>

                                    </a>

                                </li>

                                <li>
                                    <a href="crudSeance">
                                        <i class="fa fa-book"></i>
                                        <span>Séances</span>

                </span>
                                    </a>

                                </li>
                                <li>
                                    <a href="crudExamen">
                                        <i class="fa fa-edit"></i>
                                        <span>Examens</span>

                                    </a>

                                </li>
                                <li>
                                    <a href="crudMoniteur">
                                        <i class="fa fa-fw fa-users"></i> <span>Moniteurs</span>

                                    </a>

                                </li>
                                <li>
                                    <a href="crudFormateur">
                                        <i class="fa fa-fw fa-users"></i> <span>Formateurs</span>

                                    </a>

                                </li>
                                <li >
                                    <a href="#">
                                        <i class="fa fa-fw fa-graduation-cap"></i> <span>Résultats</span>
                                        <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
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
