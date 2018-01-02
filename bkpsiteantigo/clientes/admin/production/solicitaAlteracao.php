<?php
include ("header.php");
include ("controlpanel.php");
include ("controller/BDPkg_sip.php");

$BDPlanos = new BDPkg_sip ();
$planos = $BDPlanos->listSipByIdUser ( $idCliente );

?>

<!-- /top navigation -->

<!-- page content -->
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2>Solicitar Alteração / Cancelamento</h2>

			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<form method="POST" action="controller/send-email-ct.php">
						<div class="row  wow fadeInUp" data-wow-duration="1000ms"
							data-wow-delay="300ms">
							<div class="col-sm-10 col-sm-offset-1">
								<div class="form-group form-group-sm">
									<input type="text" name="ctName" class="form-control"
										placeholder="Digite seu Nome" required="required"
										style="border-color: lightgray"
										value="<?php echo $user['username'] ?>" readonly>
								</div>
							</div>
						</div>
						<div class="row  wow fadeInUp" data-wow-duration="1000ms"
							data-wow-delay="300ms">
							<div class="col-sm-10 col-sm-offset-1">
								<div class="form-group form-group-sm">
									<select id="example-getting-started" multiple="multiple">
    								    <?php
	    									foreach ( $planos as $plano ) {
		    									echo "<option value='" . $plano ['name'] . "' >" . $plano ['name'] . "</option>";
											}
										?>
									</select>
								</div>
							</div>
						</div>
						<div class="row  wow fadeInUp" data-wow-duration="1000ms"
							data-wow-delay="300ms">
							<div class="col-sm-10 col-sm-offset-1">
								<div class="form-group form-group-sm">
									<select name="ctSetor" class="form-control" required="required"
										style="border-color: lightgray">
										<option value="0" selected="selected">Selecione uma opção</option>
										<option value="1">Alterar Plano(s)</option>
										<option value="2">Cancelar Plano(s)</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row  wow fadeInUp" data-wow-duration="1000ms"
							data-wow-delay="300ms">
							<div class="col-sm-10 col-sm-offset-1">
								<div class="form-group form-group-sm">
									<input type="text" name="ctAssunto" class="form-control"
										placeholder="Digite o Assunto" required="required"
										style="border-color: lightgray"
										value="Alterar / Cancelar Plano(s)" readonly>
								</div>
							</div>
						</div>
						<div class="row  wow fadeInUp" data-wow-duration="1000ms"
							data-wow-delay="300ms">
							<div class="col-sm-10 col-sm-offset-1">
								<div class="form-group form-group-sm">
									<textarea name="ctMensagem" id="ctMensagem"
										class="form-control" rows="4"
										placeholder="Digite sua mensagem" required="required"
										style="border-color: lightgray;"></textarea>
								</div>
							</div>
						</div>
						<div class="row  wow fadeInUp" data-wow-duration="1000ms"
							data-wow-delay="300ms">
							<div class="col-sm-10 col-sm-offset-1">
								<div class="form-group form-group-sm">
									<button type="submit" class="btn btn-primary">
										<span class="glyphicon glyphicon-envelope"></span> Enviar
									</button>
									<button type="reset" class="btn btn-primary">
										<span class="glyphicon glyphicon-erase"></span> Limpar
									</button>
								</div>
							</div>
						</div>
					</form>
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

<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example-getting-started').multiselect();
    });
</script>


</body>
</html>