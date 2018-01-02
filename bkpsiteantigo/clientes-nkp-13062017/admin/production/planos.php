<?php 
include("header.php");
include("controlpanel.php");
include("controller/BDPkg_sip.php");

$BDPlanos = new BDPkg_sip();
$planos = $BDPlanos->listSipByIdUser($idCliente);


?>
        <!-- /top navigation -->

        <!-- page content -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Meus Planos </h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Número</th>
                          <th>Caller ID</th>
                          <th>Plano</th>
                          <th>Forma de Pgto</th>
                          <th>Data de Criação</th>
                          <th>IP Registro</th>
                          <th>Dispositivo</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      $BDPlan = new BDPkg_plan();
                          foreach($planos as $plano) {
                          	$plan = $BDPlan->listPlanById($user['id_plan']);
                          	
                          	if($plan['id'] == 1){
                          		$tpPlan = "Moby +50";
                          	}else if($plan['id'] == 3){
                          		$tpPlan = "Moby + 100";
                          	}else if($plan['id'] == 5){
                          		$tpPlan = "Moby Total";
                          	}else {
                          		$tpPlan = "No Plain";
                          	}
                          	
                          	if($tipoConta == 0){ 
                          		$tipo = "Pré-pago";
                          	}else {
                          		$tipo = "Pós-pago";
                          	}
                          	
                          	if($plano['status'] == 1){
                          		$stPlan = "Ativo";
                          	}else {
                          		$stPlan = " Inativo";
                          	}
                          	
                          	echo "<tr>";
                          	echo "<td>".$plano['name']."</td>";
                          	echo "<td>".$plano['callerid']."</td>";
                          	echo "<td>".$tpPlan."</td>";
                          	echo "<td>".$tipo."</td>";
                          	echo "<td>".$user['creationdate']."</td>";
                          	echo "<td>".$plano["ipaddr"]."</td>";
                          	echo "<td>".$plano['useragent']."</td>";
                          	echo "<td>".$stPlan."</td>";
                          	echo "</tr>";                         	
                          }
                      ?>
                     </tbody>
                    </table>
                  </div>
                </div>
              </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <p>&copy; 2016 - Desenvolvido por: Moby Telecomunicações.</p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    
    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    
  </body>
</html>