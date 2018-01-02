 <?php 
  include("header.php")
  ?>
  
 <?php 
  include("controlpanel.php")
  ?>  
  
 <?php 
  include("callonline.php")
  ?>  
  
 
  
           <!-- Atualizar tabela  -->
        	<script type="text/javascript">
       	 		var intervalo = setInterval(function() { $('#atualizatabela').load('http://localhost/moby_website_v2/admin/production/callonline.php'); }, 3000);
	   		</script>
          
          <br />
          
   
 <?php 
  include("footer.php")
  ?>
  
  </body>
</html>