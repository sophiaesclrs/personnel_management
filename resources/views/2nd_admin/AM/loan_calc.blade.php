<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" sizes="4x4" href="../../assets/img/nmpc-logo.png">
  <title>msu-iit nmpc</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../assets/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

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
                    <a href="#" style="font-size: 15px; text-transform: capitalize; font-weight: 400; color:white;" class="ml-2 d-block font-weight-bold">Area Manager Head</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ url ('am-dashboard')}}" class="nav-link">
                                <i class="nav-icon fas fa-layer-group"></i>
                                <p> Dashboard </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url ('am-dashboard/bod_res')}}" class="nav-link">
                                <i class="nav-icon fas fa-folder-closed"></i>
                                <p> BOD Resolutions </p>
                            </a>
                        </li>

                        <li class="nav-header">LOANS</li>

                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-landmark-dome"></i>
                            <p>
                              Productive Prod
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>Micro Loan</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>POF Loan</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>MSME 1</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>MSME 2</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>Micro Loan</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>Credit Line</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>FAPE Loan</p>
                              </a>
                            </li>
                          </ul>
                        </li>

                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-landmark-dome"></i>
                            <p>
                              Providential Prod
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>Back-to-Back Loan</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>Gadget & Appliance Loan</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>Gift Certificate Loan</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>Real Estate Loan</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>Medical Emergency Loan</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>ECF Loan</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>Rice/Corn Prod Loan</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>Salary Loan</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>EPC Loan</p>
                              </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url ('am-dashboard/providential/loan_app')}}" class="nav-link">
                                  <i class="fas fa-address-book nav-icon"></i>
                                  <p>
                                    Personal Loan
                                    <i class="fas fa-angle-left right"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ url ('am-dashboard/providential/loan_app')}}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Applications</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url ('am-dashboard/providential/loan_calc')}}" style="background: #660000;" class="nav-link active">
                                          <i class="fas fa-circle nav-icon"></i>
                                          <p>Calculator</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url ('am-dashboard/providential/loan_notif')}}" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Notifications</p>
                                      </a>
                                  </li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="fas fa-address-book nav-icon"></i>
                                    <p>Pensioners' Loan</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="fas fa-address-book nav-icon"></i>
                                    <p>Educational Loan</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="fas fa-address-book nav-icon"></i>
                                    <p>LGU Salary Loan</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="fas fa-address-book nav-icon"></i>
                                    <p>Bonus/Incentive Loan</p>
                                </a>
                              </li>
                            </ul>
                          </li>

                          <li class="nav-header">COOP BRANCHES</li>

                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-street-view"></i>
                              <p>
                                AREA ONE
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Tibanga Main</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Bulua Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Carmen Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Cogon Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Laguindingan Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Manticao Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Puerto Branch</p>
                                  </a>
                              </li>
                            </ul>
                          </li>

                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-street-view"></i>
                              <p>
                                AREA TWO
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Pala-o Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Buru-un Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Kiwalan Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Poblacion Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Suarez-Tominobo Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Tubod Iligan Branch</p>
                                  </a>
                              </li>

                            </ul>
                          </li>

                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-street-view"></i>
                              <p>
                                AREA THREE
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Butuan Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Davao Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>General Santos Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Bacolod LDN Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Maranding Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Pagadian Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Tubod LDN Branch</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>San Francisco Branch</p>
                                  </a>
                              </li>

                            </ul>
                          </li>
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
                              <a href="" class="nav-link">
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
                        <h1 class="m-0">Loan Calculator</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="">providential products</a></li>
                            <li class="breadcrumb-item active">Personal Loan</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Info boxes -->
                <div class="row">

                </div>
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer style="background: #000; color: white; text-transform: uppercase; font-size: 12px; text-align: center;" class="main-footer">
        <strong>Copyright &copy; 2023-2024
            <a style="color: white; text-transform: uppercase; font-size: 12px;" href="">MSU-IIT National Multi-Purpose Cooperative</a>.
            All rights reserved.
        </strong>
    </footer>
    </div>
    <!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../../assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/adminlte.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../assets/plugins/jszip/jszip.min.js"></script>
<script src="../../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- ChartJS -->
<script src="../../assets/plugins/chart.js/Chart.min.js"></script>
<!-- JQVMap -->
<script src="../../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../assets/plugins/moment/moment.min.js"></script>
<script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Summernote -->
<script src="../../assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../assets/dist/js/pages/dashboard.js"></script>

<script>
  $(function () {
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
