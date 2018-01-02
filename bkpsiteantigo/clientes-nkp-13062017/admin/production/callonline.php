<?php 
require ("controller/BDPkg_call_online.php");


$BDPkg_call_online = new BDPkg_call_online();


$idCliente = 4;

$chamadas = $BDPkg_call_online->listUserByIdUser($idCliente);



?>


<!--  CHAMADAS ON-LINE  -->
              <div id="atualizatabela" class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Chamadas No Momento <small></small></h2>
                 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                         <!--  <th>Usuário</th> -->
                          <th>Ramal</th> 
                          <th>Número Discado</th>
                          <th>Codec</th>
                          <th>Duração</th>
                        </tr>
                      </thead>
                      <tbody>
                       
                      
                        <?php 
                        foreach($chamadas as $chamada){
                        	
                          echo ' <tr><td>';
                            
                           
                           $parte1 =  substr($chamada['canal'],0,-9 ) ;
                           $ramal = $parte1 ;
                           
                           echo $ramal .
                          
                          '</td> <td>'.$chamada['ndiscado'].'</td>
                          
                    		<td>'.$chamada['codec'].'</td><td>';
                          
                        echo gmdate('H:i:s', $chamada['duration'])
                          .   '</td> <tr>';
                         } 
                          
                         ?>
                         
                         
                         
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

    <!-- jQuery custom content scroller -->
    <script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Datatables -->
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
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>


  
         