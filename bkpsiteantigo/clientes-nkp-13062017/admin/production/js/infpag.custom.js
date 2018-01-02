$(document).ready(function(){
     //Aplicando as mascaras nos inputs cpf, valor e vencimento.
    $("#btn-infpagamento").click(function (){
		 if($('#form')[0].checkValidity()) {
			 
          $("#myModal").modal('show');
          $("#returninfopag").addClass("hide");
          var cliente = $("#cliente").val();
          var idpag = $("#idpag").val();
          
          
          $.ajax({
		  url: "controller/insere_infpagamento.php",
		  data:{cliente:cliente,idpag:idpag},
		  type:'post',
		  dataType:'json',
		  success: function(resposta){
                     $("#myModal").modal('hide');
                      console.log(resposta)
			if(resposta.code == 200){
				 	 
					  $("#returninfopag").removeClass("hide");		 
					  $("#modalConfirmacao").modal('show');	
					  $("#resultadogeral").html(resposta);
								
			}else{
					  $("#returninfopag").removeClass("hide");		 
					  $("#modalConfirmacao").modal('show');	
				      $("#resultadogeral").html(resposta);
				
				   	  
			}
		  },
                  error:function (resposta){
                      $("#myModal").modal('hide');
                      alert("Ocorreu um erro  - Mensagem: "+resposta);
                       
                  }
		});
          
		} //endif
		else {
                alert("Codigo de cliente inválido!")
            }
     })
     
     
})