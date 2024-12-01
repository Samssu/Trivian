<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}//fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{asset('AdminLTE/plugins')}}//tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}//icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}//jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE/dist')}}//css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}//overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}//daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}//summernote/summernote-bs4.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- AdminLTE css -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Sidebaar -->
        @include('admin.layout-admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- /.content-header -->

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>gallery</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">gallery</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <!-- Timelime example  -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- The time line -->
                            <div class="timeline">
                                <!-- /.timeline-label -->


                                <div>
                                    <div class="timeline-item">


                                        <h3 class="timeline-header"><a href="#">Photo Main</a>
                                        </h3>

                                        <div class="timeline-body">
                                            <div class="image-container">
                                                <img src="/images/kokomi.png" alt="miaw" class="img-fluid">
                                            </div>
                                        </div>

                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-sm">change</a>
                                            <a class="btn btn-danger btn-sm">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-envelope bg-blue"></i>
                                    <div class="timeline-item">
                                        <!-- Gambar Bulat sebagai Pengganti Teks -->
                                        <h3 class="timeline-header">

                                            <a href="#">Photo Profile Community</a>
                                        </h3>

                                        <div class="timeline-body">
                                            <a href="#">
                                                <img src="/images/kokomi.png" alt="User Image" class="img-circle"
                                                    style="width: 100px; height: 100px; object-fit: cover;">
                                            </a>
                                        </div>

                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-sm">Change</a>
                                            <a class="btn btn-danger btn-sm">Delete</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-envelope bg-blue"></i>
                                    <div class="timeline-item">
                                        <!-- Gambar Bulat sebagai Pengganti Teks -->
                                        <h3 class="timeline-header">

                                            <a href="#">kolaborasi</a>
                                        </h3>

                                        <div class="timeline-body">
                                            @include('form-text.user-follow')
                                            @include('form-text.user-follow')
                                            @include('form-text.user-follow')
                                        </div>

                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-sm">Change</a>
                                            <a class="btn btn-danger btn-sm">Delete</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-envelope bg-blue"></i>
                                    <div class="timeline-item">

                                        <h3 class="timeline-header"><a href="#">Project Text</a>
                                        </h3>

                                        <div class="timeline-body">
                                            @include('form-text.kucing-form')
                                        </div>
                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-sm">Read more</a>
                                            <a class="btn btn-danger btn-sm">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->

                                <div>
                                    <i class="fas fa-clock bg-gray"></i>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <!-- /.timeline -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


    </div>

    @include('admin.layout-admin.footer')
</body>

</html>