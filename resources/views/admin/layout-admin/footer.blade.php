<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins')}}//jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('AdminLTE/plugins')}}//jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins')}}//bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('AdminLTE/plugins')}}//chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('AdminLTE/plugins')}}//sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('AdminLTE/plugins')}}//jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('AdminLTE/plugins')}}//jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('AdminLTE/plugins')}}//jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('AdminLTE/plugins')}}//moment/moment.min.js"></script>
<script src="{{asset('AdminLTE/plugins')}}//daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins')}}//tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('AdminLTE/plugins')}}//summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('AdminLTE/plugins')}}//overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist')}}//js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE/dist')}}//js/demo.js"></script>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('AdminLTE/dist')}}//js/pages/dashboard.js"></script>
<script>
function confirmDelete(event) {
    // Mencegah aksi default dari link
    event.preventDefault();

    // Menampilkan alert konfirmasi
    const isConfirmed = confirm("Apakah Anda yakin ingin menghapus data ini?");

    // Jika user menekan "OK", lakukan aksi (misalnya menghapus data)
    if (isConfirmed) {
        alert("Data telah dihapus!"); // Bisa ganti dengan aksi penghapusan sesuai kebutuhan
        // Tambahkan logika penghapusan data atau redirect ke halaman lain
    } else {
        alert("Penghapusan dibatalkan.");
    }
}
</script>