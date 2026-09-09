
<!-- Modal Logout !-->
<div class="modal fade" id="modalExit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
</div>
 
    <div class="modal-body">
    <p>Apakah Yakin Ingin Keluar?</p>
    </div>

<div class="modal-footer">
<form action= "<?php echo base_url(). 'login/logout'; ?>" method="post">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success" >Lanjutkan</button>
  </div></form>
</div>
</div>
</div>
<? echo form_close();?>

		<!--====== Javascripts & Jquery ======-->
        <script src="<?php echo base_url('assets/template_galery/js/vendor/jquery-3.2.1.min.js');?>"></script>
	<script src="<?php echo base_url('assets/template_galery/js/jquery.slicknav.min.js');?>"></script>
	<script src="<?php echo base_url('assets/template_galery/js/slick.min.js');?>"></script>
	<script src="<?php echo base_url('assets/template_galery/js/fresco.min.js');?>"></script>
	<script src="<?php echo base_url('assets/template_galery/js/main.js');?>"></script>


 <!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!--menampilkan data ke tabel dengan plugin datatables!-->
<script>
    $('#anak').DataTable();
    $('#cucu').DataTable();
    $('#cicit').DataTable();
    $('#baok').DataTable();
    $('#detil_cucu').DataTable();
    $('#ortu').DataTable();


</script>

<script type="text/javascript" href="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE -->
<script src="<?php echo base_url('assets/dist/js/adminlte.js')?>"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url('assets/plugins/chart.js/Chart.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/dist/js/pages/dashboard3.js')?>"></script>
<script href="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
