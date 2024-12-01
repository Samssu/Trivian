<!-- Main content -->
<section class="content">
    <div class="container-fluid">


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Activity </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama Pengguna</th>
                                            <th>Jumlah Project</th>
                                            <th>Level</th>
                                            <th>Aksi</th> <!-- Column for CRUD buttons -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Online Shop</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>
                                                <!-- Action Buttons -->
                                                <a href="/edit-act-admin" class="btn btn-sm btn-primary"><i
                                                        class="bi bi-pencil"></i>
                                                    Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i>
                                                    Delete</a>
                                                <a href="{{ route('mytask-activity') }}" class="btn btn-sm btn-info"><i
                                                        class="bi bi-eye"></i>
                                                    View</a>
                                            </td>
                                        </tr>

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
    </div>


</section>