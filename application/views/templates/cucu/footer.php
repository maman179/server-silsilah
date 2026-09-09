
<!-- JAVASCRIPT-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<!--menampilkan data ke tabel dengan plugin datatables!-->
<script>
    $('#anak').DataTable();
    $('#cucu').DataTable();
    $('#cicit').DataTable();
    $('#baok').DataTable();
    $('#detil_cucu').DataTable();
    $('#ortu').DataTable();

</script>

<script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script type="text/javascript" src="assets/js/jquery.js"></script>

<script type="text/javascript" src="<? base_url('assets/js/sb-admin-2.js')?>"></script>	

<!-- Bootstrap core JavaScript-->
<script type="text/javascript" src="<? base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
<script type="text/javascript" src="<? base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script type="text/javascript" src="<? base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script type="text/javascript" src="<? base_url('assets/js/sb-admin-2.min.js')?>"></script>

    <!-- Page level plugins -->
    <script type="text/javascript" src="<? base_url('assets/vendor/datatables/jquery.dataTables.min.js')?>"></script>
    <script type="text/javascript" src="<? base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>

    <!-- Page level custom scripts -->
    <script type="text/javascript" src="<? base_url('assets/<script src="js/demo/datatables-demo.js')?>"></script>
    <script>
        
$(document).ready(function()
{
  $("#ModalView<?php echo $u->id_cucu;?>").modal("show");
    
  $("#BtnUpdate").click(function()
  {
    $("ModalView<?php echo $u->id_cucu;?>").modal("close");
  });
  $("#BtnHapus").click(function()
  {
    $("#ModalView<?php echo $u->id_cucu;?>").modal("close");
  });
  
});</script>

    
</body>

</html>