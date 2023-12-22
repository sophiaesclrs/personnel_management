<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" sizes="4x4" href="../../assets/img/nmpc-logo.png">
  <title>msu-iit nmpc</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="../../../assets/plugins/fontawesome-free/css/all.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="../../../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../../assets/dist/css/adminlte.min.css">

<!-- daterange picker -->
<link rel="stylesheet" href="../../../assets/plugins/daterangepicker/daterangepicker.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="../../../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="../../../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="../../../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="../../../assets/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="../../../assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet" href="../../../assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
<!-- BS Stepper -->
<link rel="stylesheet" href="../../../assets/plugins/bs-stepper/css/bs-stepper.min.css">
<!-- dropzonejs -->
<link rel="stylesheet" href="../../../assets/plugins/dropzone/min/dropzone.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../../assets/dist/css/adminlte.min.css">

<!-- summernote -->
<link rel="stylesheet" href="../../../assets/plugins/summernote/summernote-bs4.min.css">
<!-- CodeMirror -->
<link rel="stylesheet" href="../../../assets/plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="../../../assets/plugins/codemirror/theme/monokai.css">
<!-- SimpleMDE -->
<link rel="stylesheet" href="../../../assets/plugins/simplemde/simplemde.min.css">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400;500;600;700;800;900&display=swap');

    *{
        font-family: 'Source Sans 3', sans-serif;
    }

    ::-webkit-scrollbar { width: 5px; }
    ::-webkit-scrollbar-track { background: #212529; }
    ::-webkit-scrollbar-thumb {
      background: #212529;
      transition: all 0.3s ease;
    }
    ::-webkit-scrollbar-thumb:hover { background: #000; }

    .parent {
        display: flex;
        color: white;

        text-align: center;
        text-align: center;
    }
    .child {
        display: inline-block;
        padding: 0.3rem;
        vertical-align: middle;
    }
    .info{
        padding: 0;margin: 0;
        font-size: 11px;
        font-weight: 400;
        text-transform: uppercase;
        text-align: center;
    }
    .sched{
        font-size: 12px;
        padding: 0;margin: 0;
        font-weight: bold;
        place-content: center;
    }
    .calendar{

        font-size: 20px;
        padding: 0.01% 1rem;
        color: black;
        background: whitesmoke;
        border: 2px solid rgba(255, 255, 255, 0,2);
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        display: flex;
        align-items: center;
    }

    .logo{
        width: 60px;
        height: auto;
        background: transparent;
    }

    .nav-item{ padding-bottom: 2%;}
    .breadcrumb-item a { color: black; text-transform: uppercase; }

    .head-text h5{
        margin-top: 0.5rem;
        margin-bottom: 0;
    }
    .head-text p{
        color: #fff;
        font-weight: 500;
        font-size: 14px;
        margin: 0;
    }
    .head-text span{ font-weight: bold; }

    nav .nav-item a:hover{ color: #fff; }

    .icon{
      display: inline-block;
      font-size: 12px;
    }
    .icon i{ color: black; }

    thead, th{
      text-align: center;
      font-size: 14px;
      text-transform: uppercase;
    }
    tbody, td{
      text-align: center;
      font-size: 14px;
    }

    .badge{
      background: #28a745;
      color: white;
      padding: 5px;
      font-size: 12px;
    }
    .badge-amen{ background: #9C0D0F; }
    .badge-blue{ background: #031273; }

    th,
    td{ font-size: 12px; }

  </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class=" preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="../../assets/img/nmpc-logo.png" width="250">
        </div>

        <!-- Navbar -->
        <nav style="background: #031273; color: white;" class="main-header navbar navbar-expand">

                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa-solid fa-compress"></i></a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">

                    <div class='parent'>
                        <div class='child '>
                            <div class="info"> Today's Date</div>
                            <div class="heading-sub12 child sched">
                                <?php
                                    date_default_timezone_set('Asia/Manila');
                                    $today = date('m-d-Y');
                                    echo $today;
                                ?>
                            </div>
                        </div>
                        <div class='child calendar'><i class="far fa-calendar-days"></i></div>
                    </div>
                </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside style="background: #000;" class="main-sidebar elevation-4">

            <!-- Brand Logo -->
            <a href="" style="color: #fff;" class="mt-2 pb-3 d-flex brand-link">
                <img src="../../assets/img/nmpc-logo.png" class="logo">
                <span class="brand-text font-weight-bold">msu-iit nmpc</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-4 pb-3 mb-3 d-flex">
                    <div class="image">
                    <img src="../../assets/img/admin.png" class="img-circle elevation-2">
                    </div>
                    <div class="info">
                    <a href="#" style="font-size: 15px; text-transform: capitalize; font-weight: 400; color:white;" class="ml-2 d-block font-weight-bold">MMD Head</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ url ('mmd-dashboard')}}" class="nav-link">
                                <i class="nav-icon fas fa-layer-group"></i>
                                <p> Dashboard </p>
                            </a>
                        </li>

                        <li class="nav-item">
                          <a href="{{ url ('mmd-dashboard/bodres_view')}}" class="nav-link">
                              <i class="nav-icon fas fa-folder-closed"></i>
                              <p> BOD Resolutions </p>
                          </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url ('mmd-dashboard/news')}}" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p> News & Events Archive </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-users-viewfinder"></i>
                                <p>
                                    Membership
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url ('mmd-dashboard/bdirectory') }}" style="background: #660000;" class="nav-link active">
                                        <i class="fas fa-address-book nav-icon"></i>
                                        <p>Business Directories</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url ('mmd-dashboard/membership/schedules')}}" class="nav-link">
                                        <i class="fas fa-calendar-check nav-icon"></i>
                                        <p>
                                            Appointments
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url ('mmd-dashboard/membership/schedules')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Schedules</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url ('mmd-dashboard/membership/clients')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Clients</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url ('mmd-dashboard/membership/done_clients')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Assisted Clients</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url ('mmd-dashboard/membership/dec_app')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Declined Appointments</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url ('mmd-dashboard/reports/analytics')}}" class="nav-link">
                                        <i class="fas fa-chart-simple nav-icon"></i>
                                        <p>
                                            Reports
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url ('mmd-dashboard/reports/analytics')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Analytics</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url ('mmd-dashboard/reports/members')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>MNMPC Members</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url ('mmd-dashboard/reports/reg_clients')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Registered Clients</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-header">OTHERS</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-gear"></i>
                            <p>
                                Settings
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('users/update-profile" class="nav-link">
                                <i class="fas fa-user-gear nav-icon"></i>
                                <p>Update Profile</p>
                                </a>
                            </li>
                            <li class="nav-item">
    <a href="{{ route('auth2.logout') }}" class="nav-link">
        <i class="fas fa-arrow-right-from-bracket nav-icon"></i>
        <p>Logout</p>
    </a>
</li>
                            </ul>
                        </li>

                    </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mt-3 mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Business Directories</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Business Directories</a></li>
                            <li class="breadcrumb-item active">Add Business Directory</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default card-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputName">Business Name</label>
                                    <input type="text" id="" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputName">Address</label></label>
                                    <input type="text" id="" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputName">Business Type</label></label>
                                    <input type="text" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputName">Products & Services</label></label>
                                    <input type="text" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputName">Contact No.</label></label>
                                    <input type="number" id="" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="col-12 mt-5">
                            <a href="" class="btn btn-danger">Cancel</a>

                            <a href="">
                                <input type="submit" value="Add Business Directory" class="btn btn-success float-right">
                            </a>
                        </div>

                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.card -->
            </div>
        </section>
        <!-- /.content -->
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer style="background: #000; color: white; text-transform: uppercase; font-size: 12px; text-align: center;" class="main-footer">
        <strong>Copyright &copy; 2023-2024
            <a style="color: white; text-transform: uppercase; font-size: 12px;" href="">MSU-IIT National Multi-Purpose Cooperative</a>.
            All rights reserved.
        </strong>
    </footer>
    </div>
    <!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../../assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../../assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../../assets/plugins/moment/moment.min.js"></script>
<script src="../../../assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../../../assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../../../assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../../../assets/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../assets/dist/js/adminlte.min.js"></script>

<!-- Summernote -->
<script src="../../../assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<script src="../../../assets/plugins/codemirror/codemirror.js"></script>
<script src="../../../assets/plugins/codemirror/mode/css/css.js"></script>
<script src="../../../assets/plugins/codemirror/mode/xml/xml.js"></script>
<script src="../../../assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>


<script>
  $(function () {

    $('#summernote').summernote()

    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
