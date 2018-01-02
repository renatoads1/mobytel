 <?php 
  include("header.php");
 
  ?>
  

  
  
 <?php 
  
  if($_SESSION['tipoConta'] == 1){
  
	 	include("controlpanel.php");
	  	include("contasPanel.php");
  
  }else{
  	
	  	include("controlPanelRecarga.php");
	  	include("contasPanelRecarga.php");
  
  }
  
 ?>  
  

  <?php 
 		//include("callonline.php");
  ?>  
  
  
 <?php 
  include("modals.php");
  ?>  
  
  
   
           <!-- Atualizar tabela  ESSSAS LINHAS DE CODIGO ATUALIZAM A TABELA 
        	<script type="text/javascript">
       	 		var intervalo = setInterval(function() { 
       	 		
       	 			$('#atualizatabela').load('http://localhost/moby_website_v2/admin/production/callonline.php'); 
       	 		
       	 		}, 3000);
	   		</script>
          
          <br />
         -->
   
 <?php 
   include("footer.php");
  ?>
  
  </body>
</html>