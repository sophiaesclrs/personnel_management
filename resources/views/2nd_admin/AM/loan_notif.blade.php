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
                                      <a href="{{ url ('am-dashboard/providential/loan_calc')}}" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Calculator</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url ('am-dashboard/providential/loan_notif')}}" style="background: #660000;" class="nav-link active">
                                          <i class="fas fa-circle nav-icon"></i>
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
                        <h1 class="m-0">Loan Notifications</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="">Providential Products</a></li>
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
        <div class="col-md-3">
          <a href="compose.html" class="btn btn-primary btn-block mb-3">Compose</a>

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Folders</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="#" class="nav-link">
                    <i class="fas fa-inbox"></i> Inbox
                    <span class="badge bg-primary float-right">12</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-envelope"></i> Sent
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-file-alt"></i> Drafts
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-filter"></i> Junk
                    <span class="badge bg-warning float-right">65</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-trash-alt"></i> Trash
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Labels</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle text-danger"></i>
                    Important
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle text-warning"></i> Promotions
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle text-primary"></i>
                    Social
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Inbox</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Mail">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-sync-alt"></i>
                </button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-right"></i>
                    </button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Juan Dela Cruz</a></td>
                    <td class="mailbox-subject"><b>Loan Application</b> - Greetings! I would like to have an appointment...
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">5 mins ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check2">
                        <label for="check2"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Juan Dela Cruz</a></td>
                    <td class="mailbox-subject"><b>Loan Application</b> - Greetings! I would like to have an appointment...
                    </td>
                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                    <td class="mailbox-date">28 mins ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check3">
                        <label for="check3"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Juan Dela Cruz</a></td>
                    <td class="mailbox-subject"><b>Loan Application</b> - Greetings! I would like to have an appointment...
                    </td>
                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                    <td class="mailbox-date">11 hours ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check4">
                        <label for="check4"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Juan Dela Cruz</a></td>
                    <td class="mailbox-subject"><b>Loan Application</b> - Greetings! I would like to have an appointment...
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">15 hours ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check5">
                        <label for="check5"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Juan Dela Cruz</a></td>
                    <td class="mailbox-subject"><b>Loan Application</b> - Greetings! I would like to have an appointment...
                    </td>
                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                    <td class="mailbox-date">Yesterday</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check6">
                        <label for="check6"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Juan Dela Cruz</a></td>
                    <td class="mailbox-subject"><b>Loan Application</b> - Greetings! I would like to have an appointment...
                    </td>
                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                    <td class="mailbox-date">2 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check7">
                        <label for="check7"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Juan Dela Cruz</a></td>
                    <td class="mailbox-subject"><b>Loan Application</b> - Greetings! I would like to have an appointment...
                    </td>
                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                    <td class="mailbox-date">2 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check8">
                        <label for="check8"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Juan Dela Cruz</a></td>
                    <td class="mailbox-subject"><b>Loan Application</b> - Greetings! I would like to have an appointment...
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">2 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check9">
                        <label for="check9"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Juan Dela Cruz</a></td>
                    <td class="mailbox-subject"><b>Loan Application</b> - Greetings! I would like to have an appointment...
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">2 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check10">
                        <label for="check10"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Juan Dela Cruz</a></td>
                    <td class="mailbox-subject"><b>Loan Application</b> - Greetings! I would like to have an appointment...
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">2 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check11">
                        <label for="check11"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Juan Dela Cruz</a></td>
                    <td class="mailbox-subject"><b>Loan Application</b> - Greetings! I would like to have an appointment...
                    </td>
                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                    <td class="mailbox-date">4 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check12">
                        <label for="check12"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Juan Dela Cruz</a></td>
                    <td class="mailbox-subject"><b>Loan Application</b> - Greetings! I would like to have an appointment...
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">12 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check13">
                        <label for="check13"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Juan Dela Cruz</a></td>
                    <td class="mailbox-subject"><b>Loan Application</b> - Greetings! I would like to have an appointment...
                    </td>
                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                    <td class="mailbox-date">12 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check14">
                        <label for="check14"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Juan Dela Cruz</a></td>
                    <td class="mailbox-subject"><b>Loan Application</b> - Greetings! I would like to have an appointment...
                    </td>
                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                    <td class="mailbox-date">14 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check15">
                        <label for="check15"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Juan Dela Cruz</a></td>
                    <td class="mailbox-subject"><b>Loan Application</b> - Greetings! I would like to have an appointment...
                    </td>
                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                    <td class="mailbox-date">15 days ago</td>
                  </tr>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                  <i class="far fa-square"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-sync-alt"></i>
                </button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-right"></i>
                    </button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
    //Enable check and uncheck all functionality
    $('.checkbox-toggle').click(function () {
      var clicks = $(this).data('clicks')
      if (clicks) {
        //Uncheck all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
        $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
      } else {
        //Check all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
        $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
      }
      $(this).data('clicks', !clicks)
    })

    //Handle starring for font awesome
    $('.mailbox-star').click(function (e) {
      e.preventDefault()
      //detect type
      var $this = $(this).find('a > i')
      var fa    = $this.hasClass('fa')

      //Switch states
      if (fa) {
        $this.toggleClass('fa-star')
        $this.toggleClass('fa-star-o')
      }
    })
  })
</script>

</body>
</html>
