<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>User</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>92<sup style="font-size: 20px"></sup></h3>

                        <p>Community</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Gallery Project</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data table Pengguna Website Trivian</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama Pengguna</th>
                                            <th>Email</th>
                                            <th>Jumlah Community</th>
                                            <th>Jumlah Project</th>
                                            <th>Level</th>
                                            <th>Jumlah Kolaborasi</th>
                                            <th>Aksi</th> <!-- Column for CRUD buttons -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>samssu</td>
                                            <td>miawmiaw@gmail.com</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>10</td>
                                            <td>4</td>
                                            <td>
                                                <!-- Action Buttons -->
                                                <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i>
                                                    Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger"
                                                    onclick="confirmDelete(event)"><i class="bi bi-trash"></i>
                                                    Delete</a>
                                                <a href="/profile" class="btn btn-sm btn-info"><i class="bi bi-eye"></i>
                                                    View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>asep</td>
                                            <td>AsepKopling@gmail.com</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>10</td>
                                            <td>4</td>
                                            <td>
                                                <!-- Action Buttons -->
                                                <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i>
                                                    Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger"
                                                    onclick="confirmDelete(event)"><i class="bi bi-trash"></i>
                                                    Delete</a>
                                                <a href="/profile" class="btn btn-sm btn-info"><i class="bi bi-eye"></i>
                                                    View</a>
                                            </td>
                                        </tr>

                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <!-- JavaScript for Delete Confirmation -->


    </div>


</section>