
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3  class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Relatório de SMS</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart">
  <table class="table table-striped col-lg-12">
      <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Data Criação</th>
      <th>Visualizar</th>
      <th>Exportar</th>
    </tr>
  </thead>
    <tbody>
                                    <?php
include_once("../naruto/hokage.php");
include_once("../naruto/sask.php");
$querycont =  "SELECT * FROM campanhasms where iduser = '".$user_id."' ORDER BY id DESC;";
        $idlist = $fconn->query($querycont);
        
        while ($obj = mysqli_fetch_Object($idlist)) 
        {
          echo("<tr><td>".$obj->id."</td><td>".$obj->descricao."</td><td>".$obj->dataCriacao."</td><td><a href='relsms.php?user_id=$user_id&tabela=reldenvsms&campanha=$obj->id' target='_blank'><span id='".$obj->id."' class='btn btn-success'>Visualizar</span></a></td><td><a href='relsmsexcell.php?user_id=$user_id&tabela=relsmsexcell&campanha=$obj->id' target='_blank'><button id='".$obj->id."' type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-download-alt'></span> Exportar</button></a></td></tr>");
        }
        //<span id='".$obj->id."' class='btn btn-success'>Exportar</span>

?>
</tbody>
</table>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>

      