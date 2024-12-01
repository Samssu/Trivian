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
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
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
                            <h1>Timeline</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Timeline</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <h5 class="mt-4 mb-2">Info Box With <code>bg-*</code></h5>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box bg-info">
                                <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Bookmarks</span>
                                    <span class="info-box-number">41,410</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%">
                                        </div>
                                    </div>
                                    <span class="progress-description">
                                        70% Increase in 30 Days
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box bg-success">
                                <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Likes</span>
                                    <span class="info-box-number">41,410</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%">
                                        </div>
                                    </div>
                                    <span class="progress-description">
                                        70% Increase in 30 Days
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box bg-warning">
                                <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Events</span>
                                    <span class="info-box-number">41,410</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%">
                                        </div>
                                    </div>
                                    <span class="progress-description">
                                        70% Increase in 30 Days
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box bg-danger">
                                <span class="info-box-icon"><i class="fas fa-comments"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Comments</span>
                                    <span class="info-box-number">41,410</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%">
                                        </div>
                                    </div>
                                    <span class="progress-description">
                                        70% Increase in 30 Days
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

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

                                        <h3 class="timeline-header"><a href="#">Postingan</a>
                                        </h3>
                                        <!-- Nilai -->
                                        <p><strong>Nilai:</strong> 85/100</p>


                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-sm">Read more</a>
                                            <a class="btn btn-danger btn-sm">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->

                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-envelope bg-blue"></i>
                                    <div class="timeline-item">

                                        <h3 class="timeline-header"><a href="#">Postingan</a>
                                        </h3>
                                        <!-- Nilai -->
                                        <p><strong>Exp :</strong> 250xp</p>


                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-sm">Read more</a>
                                            <a class="btn btn-danger btn-sm">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-envelope bg-blue"></i>
                                    <div class="timeline-item">

                                        <h3 class="timeline-header"><a href="#">Postingan</a>
                                            <div class="mt-3">
                                                <h5><strong>Penjelasan:</strong></h5>
                                                <p>
                                                    This post provides a comprehensive overview of the topic. It
                                                    discusses key points and offers valuable insights
                                                    that can help readers understand the subject in depth. The
                                                    explanation is clear and easy to follow, making it
                                                    accessible for both beginners and those with more experience. This
                                                    content is a great resource for anyone looking
                                                    to learn more about the subject matter and stay updated with the
                                                    latest information.
                                                </p>
                                            </div>
                                            <div class="timeline-footer">
                                                <a class="btn btn-primary btn-sm">Read more</a>
                                                <a class="btn btn-danger btn-sm">Delete</a>
                                            </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-envelope bg-blue"></i>
                                    <div class="timeline-item">

                                        <h3 class="timeline-header"><a href="#">File</a>
                                            <div class="mt-3">

                                                <p>
                                                    This post provides a comprehensive overview of the topic. It
                                                    discusses key points and offers valuable insights
                                                    that can help readers understand the subject in depth. The
                                                    explanation is clear and easy to follow, making it
                                                    accessible for both beginners and those with more experience. This
                                                    content is a great resource for anyone looking
                                                    to learn more about the subject matter and stay updated with the
                                                    latest information.
                                                </p>

                                                <!-- Link to PDF file -->
                                                <a href="/path/to/your/file.pdf" class="btn btn-primary"
                                                    target="_blank">
                                                    <i class="bi bi-file-earmark-pdf"></i> dayat.pdf
                                                </a>
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




                    <!-- jQuery -->
                    <script src="../plugins/jquery/jquery.min.js"></script>
                    <!-- Bootstrap 4 -->
                    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <!-- AdminLTE App -->
                    <script src="../dist/js/adminlte.min.js"></script>
                    <!-- AdminLTE for demo purposes -->
                    <script src="../dist/js/demo.js"></script>
</body>

</html>



</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


</div>

@include('admin.layout-admin.footer')
</body>

</html>