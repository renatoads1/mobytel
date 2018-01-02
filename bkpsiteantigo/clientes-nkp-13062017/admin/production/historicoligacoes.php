 <?php
	include ("header.php");
	?>
  
 <?php
	include ("controlpanel.php");
	include ("controller/BDPkg_prefix.php");
	
	$BDCdr = new BDPkg_cdr ();
	$cdrs = $BDCdr->listCdrByIdUser ( $user ['id'] );
	
	$BdPrefix = new BDPkg_prefix ();
	
	?>
<script>
   
  function atualizargradechamadas(data){	
 
		var dados ='dia=' + data;
	
	    $.ajax({
	        type: 'POST',
	        //dataType: 'html',
	        url: 'gridChamadasDia.php',
	        async: true,
	        data: dados,
	        beforeSend: function () {
	            //Aqui adicionas o loader
	            $('#gridchamadas').html("<img src='images/Loading.gif'>");
	        },  
	        success: function(retorno) {
		        $('#gridchamadas').empty;
	        	$('#gridchamadas').html(retorno);          	
			}
	    });
	return false;
	document.write("Erro no AJAX!");
	}
  </script>

<!-- /top navigation -->

<!-- page content -->
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Histórico de Ligações</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#todas" data-toggle="tab">Todas
							Chamadas</a></li>
					<li><a href="#dia" data-toggle="tab">Por Dia</a></li>
					<li><a href="#mes" data-toggle="tab">Por Mês</a></li>
					<li><a href="#linha" data-toggle="tab">Por Linha</a></li>
					<li><a href="#ncompletadas" data-toggle="tab">Não Completadas</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade in active" id="todas">
						<br />
						<div class="dataTable_wrapper">
							<table id="datatable-responsive"
								class="table table-striped table-bordered dt-responsive nowrap"
								cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Data</th>
										<th>Caller ID</th>
										<th>Número Discado</th>
										<th>Tipo de Ligação</th>
										<th>Duração</th>
										<th>Estado</th>
										<th>Valor da ligação</th>
									</tr>
								</thead>
								<tbody>
                                  <?php
								     foreach ( $cdrs as $cdr ) {
										$tempoChamada = gmdate ( "H:i:s", $cdr ['sessiontime'] );
										$prefix = $BdPrefix->listPrefixById ( $cdr ['id_prefix'] );
										
										echo "<tr>";
										echo "<td>" . $cdr ['starttime'] . "</td>";
										echo "<td>" . $cdr ['src'] . "</td>";
										echo "<td>" . $cdr ['calledstation'] . "</td>";
										echo "<td>" . $prefix ['destination'] . "</td>";
										echo "<td>" . $tempoChamada . "</td>";
										echo "<td>Atendida</td>";
																								echo "<td>R$ " . $cdr ['sessionbill'] . "</td>";
																																			echo "</tr>";
																																		}
																																		?>
                              </tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="dia">
						<br />
				      <?php
										$data = date ( 'Y-m-d' );
										$BDCdr = new BDPkg_cdr ();
										$cdrs = $BDCdr->listCdrByDay ( $idCliente, $data );
										
										?>
				      <div class="row">
							<div class="col-md-3">
								<label for="dtInicioEmpresa">Escolha o dia: </label> <input
									type="date" class="form-control" id="dia" name="dia"
									value="<?php echo $data;?>"
									onchange="atualizargradechamadas(this.value)" />
							</div>
						</div>
						<br />
						<div class="dataTable_wrapper">
							<table id="datatable-responsive1"
								class="table table-striped table-bordered dt-responsive nowrap"
								cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Data</th>
										<th>Caller ID</th>
										<th>Número Discado</th>
										<th>Tipo de Ligação</th>
										<th>Duração</th>
										<th>Estado</th>
										<th>Valor da ligação</th>
									</tr>
								</thead>
								<tbody id="gridchamadas">
	                              <?php
										foreach ( $cdrs as $cdr ) {
											$tempoChamada = gmdate ( "H:i:s", $cdr ['sessiontime'] );
									    	$prefix = $BdPrefix->listPrefixById ( $cdr ['id_prefix'] );
											echo "<tr>";
											echo "<td>" . $cdr ['starttime'] . "</td>";
										    echo "<td>" . $cdr ['src'] . "</td>";
											echo "<td>" . $cdr ['calledstation'] . "</td>";
											echo "<td>" . $prefix ['destination'] . "</td>";
											echo "<td>" . $tempoChamada . "</td>";
											echo "<td>Atendida</td>";
											echo "<td>R$ " . $cdr ['sessionbill'] . "</td>";
											echo "</tr>";
											}
									?>
	                          </tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="mes">
						<br />
				       <?php
					   		$data = date('Y-m-d');
					   		$datacriacao = date ( 'Y-m-d', strtotime ( $registros ['creationdate'] ) );
					   		
					   		$dataAno= date('Y', strtotime($data));
					   		$dataCriacaoAno= date('Y', strtotime($datacriacao));
					   		$dataMes = date('m', strtotime($data));
					   		$dataCriacaoMes = date('m', strtotime($datacriacao));
					   		
					   		$anoCount = $dataAno - $dataCriacaoAno;
					   		
					   		
					   		if($anoCount == 0){
					   			$meses = $dataCriacaoMes - $dataMes;
					   			$meses = abs($meses);
					   			$meses = $meses + 1;
					   			
					   		}
					   		if($anoCount == 1){
					   			$meses = $dataMes; 
					   	
					   		}
					   		if($anoCount > 1){   }
					   		
					   		
					   		$BDCdr = new BDPkg_cdr ();
						    $cdrs = $BDCdr->listCdrByMonth ( $idCliente, $data );
							
					   ?>
				      <div class="row">
							<div class="col-md-3">
								<label for="dtInicioEmpresa">Escolha o mês: </label> 
								<select class="form-control">
								<?php 
									for($i = 0;$i<=abs($numlaco);$i++) { 
										setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
										date_default_timezone_set('America/Sao_Paulo');
										
										$mesnumeric = date('m', strtotime('-'.$i . 'months', strtotime(date('Y-m-d'))));
										$mesword = strftime("%B", strtotime('-'.$i . 'months', strtotime(date('Y-m-d'))));
										$yearnumeric = date('Y', strtotime('-'.$i . 'months', strtotime(date('Y-m-d'))));
										
										echo "<option value='.$mesnumeric."/".$yearnumeric'>".$mesword."/".$yearnumeric."</option>";
									}
								?>
								</select>
							</div>
						</div>
						<div class="dataTable_wrapper">
							<table id="datatable-responsive2"
								class="table table-striped table-bordered dt-responsive nowrap"
								cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Data</th>
										<th>Caller ID</th>
										<th>Número Discado</th>
										<th>Tipo de Ligação</th>
										<th>Duração</th>
										<th>Estado</th>
										<th>Valor da ligação</th>
									</tr>
								</thead>
								<tbody>
		                      <?php
								  foreach ( $cdrs as $cdr ) {
									$tempoChamada = gmdate ( "H:i:s", $cdr ['sessiontime'] );
									$prefix = $BdPrefix->listPrefixById ( $cdr ['id_prefix'] );
									echo "<tr>";
									echo "<td>" . $dataAno. "</td>";
									echo "<td>" . $cdr ['starttime'] . "</td>";
									echo "<td>" . $cdr ['src'] . "</td>";
									echo "<td>" . $cdr ['calledstation'] . "</td>";
									echo "<td>" . $prefix ['destination'] . "</td>";
									echo "<td>" . $tempoChamada . "</td>";
									echo "<td>Atendida</td>";
									echo "<td>R$ " . $cdr ['sessionbill'] . "</td>";
									echo "</tr>";
									}
									?>
		                  </tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="linhas">
						<br />
						<div class="dataTable_wrapper">
							<table id="datatable-responsive3"
								class="table table-striped table-bordered dt-responsive nowrap"
								cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Data</th>
										<th>Caller ID</th>
										<th>Número Discado</th>
										<th>Tipo de Ligação</th>
										<th>Duração</th>
										<th>Estado</th>
										<th>Valor da ligação</th>
									</tr>
								</thead>
								<tbody>
                              <?php
								foreach ( $cdrs as $cdr ) {
									$tempoChamada = gmdate ( "H:i:s", $cdr ['sessiontime'] );
									$prefix = $BdPrefix->listPrefixById ( $cdr ['id_prefix'] );
									echo "<tr>";
									echo "<td>" . $cdr ['starttime'] . "</td>";
									echo "<td>" . $cdr ['src'] . "</td>";
									echo "<td>" . $cdr ['calledstation'] . "</td>";
									echo "<td>" . $prefix ['destination'] . "</td>";
									echo "<td>" . $tempoChamada . "</td>";
									echo "<td>Atendida</td>";
									echo "<td>R$ " . $cdr ['sessionbill'] . "</td>";
									echo "</tr>";
									}
									?>
                          </tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="ncompletadas">
						<br />
						<div class="dataTable_wrapper">
							<table id="datatable-responsive4"
								class="table table-striped table-bordered dt-responsive nowrap"
								cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Data</th>
										<th>Caller ID</th>
										<th>Número Discado</th>
										<th>Tipo de Ligação</th>
										<th>Duração</th>
										<th>Estado</th>
										<th>Valor da ligação</th>
									</tr>
								</thead>
								<tbody>
                                  <?php
																																		foreach ( $cdrs as $cdr ) {
																																			$tempoChamada = gmdate ( "H:i:s", $cdr ['sessiontime'] );
																																			$prefix = $BdPrefix->listPrefixById ( $cdr ['id_prefix'] );
																																			echo "<tr>";
																																			echo "<td>" . $cdr ['starttime'] . "</td>";
																																			echo "<td>" . $cdr ['src'] . "</td>";
																																			echo "<td>" . $cdr ['calledstation'] . "</td>";
																																			echo "<td>" . $prefix ['destination'] . "</td>";
																																			echo "<td>" . $tempoChamada . "</td>";
																																			echo "<td>Atendida</td>";
																																			echo "<td>R$ " . $cdr ['sessionbill'] . "</td>";
																																			echo "</tr>";
																																		}
																																		?>
                              </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
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
<script
	src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script
	src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script
	src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script
	src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script
	src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script
	src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script
	src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script
	src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>

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
        $('#datatable-responsive1').DataTable();
        $('#datatable-responsive2').DataTable();
        $('#datatable-responsive3').DataTable();
        $('#datatable-responsive4').DataTable();

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