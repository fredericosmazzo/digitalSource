<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script>
  $(function () {
    $('#reciboProtocolo').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
            language: {

    sEmptyTable:     "Nenhum registro encontrado na tabela",
    sInfo: "Mostrar _START_ até _END_ do _TOTAL_ registros",
    sInfoEmpty: "Mostrar 0 até 0 de 0 Registros",
    sInfoFiltered: "(Filtrar de _MAX_ total registros)",
    sInfoPostFix:    "",
    sInfoThousands:  ".",
    sLengthMenu: "Mostrar _MENU_ registros por pagina",
    sLoadingRecords: "Carregando...",
    sProcessing:     "Processando...",
    sZeroRecords: "Nenhum registro encontrado",
    sSearch: "Pesquisar: ",
    paginate: {
                 first:    "Primeiro",
                 previous: "Anterior",
                 next:     "Próximo",
                 last:     "Último"
               }
        }
    });
  });
</script>
<!-- jQuery -->
<script src="res/site/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="res/site/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="res/site/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="/res/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/res/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/res/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/res/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/res/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/res/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/res/admin/plugins/jszip/jszip.min.js"></script>
<script src="/res/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/res/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/res/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/res/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/res/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


</body>
</html>
