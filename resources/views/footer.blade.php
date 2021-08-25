



   <!-- jQuery -->
    <script src="{{asset('public/admin/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('public/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <script>
     $(document).ready(function(){
     $("#myTable").dataTable();
   });
   
   </script>
   

   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js"></script>
<script>  
 $('#delete').on('show.bs.modal', function(e) {
  $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
</script>

   <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> 
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('public/admin/vendor/metisMenu/metisMenu.min.js')}}"></script>

<!--     <!-- Morris Charts JavaScript -->
<!--     <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script> -->
 
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('public/admin/dist/js/sb-admin-2.js')}}"></script>

</body>

</html>
