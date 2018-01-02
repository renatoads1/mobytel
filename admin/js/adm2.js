$(document).ready(function(){
console.log("carregou adm2.js");
var urlsmal = "http://superasms.tk";
var urlpost = "http://superasms.tk/naruto/hinata.php";
var urlpostsask = "http://superasms.tk/naruto/sask.php";
var endereco = localStorage.getItem('url');
var user = localStorage.getItem('user');
var senha = localStorage.getItem('senha');
id = localStorage.getItem('id');

console.log("urlpost"+urlpost+"endereco"+endereco+"user"+user+"senha"+senha+"id"+id);

/*FUNÇOES */
// buscaplanSma();""
function buscaplanSma(){
//tbodyplanSms
//buscaplanSma
   dados = "tabela=buscaplanSma";
//inicio ajax
 $("#tbodyplanSms").empty();
        $.ajax({
          url: urlpostsask,
          data:dados,
          type:'post',
          dataType:'json',
          beforSend: function(){
            
          },
          success: function(retbuscaplanSma){
            $.each( retbuscaplanSma, function( key, value ) {
              var valor = "R$00,"+value.descricao;
              $("#tbodyplanSms").append("<tr><td>"+value.id+"</td><td>"+value.nome+"</td><td>"+valor+"</td></tr>");
              //alert( key + ": " + value );
            });
         
             
          },
          error:function (errbuscaplanSma){
          
          }
      });
      //fim ajax
}

//cadastro de plano de sms 
function cadplanSma(nomePacote,Valor){
   var id_user = localStorage.getItem('id');
   dados = "Valor="+Valor+"&nomePacote="+nomePacote+"&id_user="+id_user+"&tabela=cadplanSma";
//inicio ajax
        $.ajax({
          url: urlpostsask,
          data:dados,
          type:'post',
          dataType:'json',
          beforSend: function(){
             $("#gifaguarde").append("<div style='text-align:center;' id='conteudomodal' class='modal-body'><img src='../img/banner/aguarde.gif'/></div>");
          },
          success: function(retcadplanSma){
           $("#gifaguarde").empty().slow();
             
          },
          error:function (errcadplanSma){
            $("#gifaguarde").empty().slow();
          }
      });
      //fim ajax
}
//
function carroptsmsfras(){
  var id_user = localStorage.getItem('id');

  dados = "id_user="+id_user+"&tabela=carroptsmsfras";
  //inicio ajax
        $.ajax({
          url: urlpost,
          data:dados,
          type:'post',
          dataType:'json',
          success: function(retcarroptsmsfras){
             $.each(retcarroptsmsfras, function(key,value) 
              {
                $("#selfrasescad").append("<option value='"+value.textoSMS+"'>"+value.textoSMS+"</option>");
              });
          },
          error:function (errocarroptsmsfras){
            console.log(errocarroptsmsfras+" adm2.js-L85");
          }
      });
  //fim ajax

}


function carrtabcontatos(idlista){
  var id_user = localStorage.getItem('id');
$("#tabCarConts").empty();
  dados = "idlista="+idlista+"&id_user="+id_user+"&tabela=carrtabcontatos";
  //inicio ajax
        $.ajax({
          url: urlpost,
          data:dados,
          type:'post',
          dataType:'json',
          success: function(retcarrtabcontatos){
            
              $.each(retcarrtabcontatos, function(key,value) 
              {//261017 que saco
$("#tabCarConts").append("<tr><td>"+value.id+"</td><td>"+value.nomeRecebedor+"</td><td id='td"+value.id+"' ><input type='text' id='tel"+value.id+"' value='"+value.telefone+"'>&nbsp <button id='tel"+value.id+"' type='button' class='btn btn-success' onclick=alteratel("+value.id+");><span class='glyphicon glyphicon-floppy-saved'></span></button></td><td>"+value.descricao+"</td></tr>");
              });
          },
          error:function (errocarrtabcontatos){
            alert(errocarrtabcontatos+"adm2.js-L111");
          }
      });
  //fim ajax

}

function carrlistcont(){
  var id_user = localStorage.getItem('id');
   dados = "id_user="+id_user+"&tabela=carrlistcont";
//inicio ajax
        $.ajax({
          url: urlpost,
          data:dados,
          type:'post',
          dataType:'json',
          success: function(retcarrlistcont){
           
              $.each(retcarrlistcont, function(key, value) 
              {
                $("#carrlistcont").append("<option value='"+value.idListaContatos+"'>"+value.descricao+"</option>");
              });
          },
          error:function (errocarrlistcont){
            alert(errocarrlistcont+"adm2.js-L135");
            console.log(errocarrlistcont+"adm2.js-L135");
          }
      });
      //fim ajax
}

function calCamValMes(){
	var id_user = localStorage.getItem('id');
	 dados = "id_user="+id_user+"&tabela=calCamValMes";
//inicio ajax
        $.ajax({
                    url: urlpost,
                    data:dados,
                    type:'post',
                    dataType:'json',
                    success: function(retcalCamValMes){
                      if(retcalCamValMes.msg == '1')
                      {
                      	$("#smsmes").empty();
                      	
                      	//$(document).attr("#smsmes").text("18");
                      	$("#smsmes").append(retcalCamValMes.Total);
                        
                        }else{
                        //$("#msg").append("Ocorreu um erro");
                        //$("#myModal").css("display","inline");
                      }
                      //$("#morris-area-chart").append("<div></div>");
                      //$.each(msgreldenvsms, function(key, value) {
                      //respdados =+ value.SendTime+""+value.MessageFrom;
                     //}//fim each
                     //alert(respdados);
                    },error:function (errocalCamValMes){
                      console.log(errocalCamValMes+"adm2.js-L168");
                    }
                });
                //fim ajax
}//fim função
//chamada de funçoes
calCamValMes();
//carrega lista de contatos opt
carrlistcont();
//carrega options sms frases
carroptsmsfras();
//chamadas do documento
	$(document).on("click","#fechamod",function(){
		$("#msg").empty();
		$("#myModal").css("display","none").slow();
	});
//carrega a tabela da lista de contatos
  $('#carrlistcont').change(function() {
      var idlista = $("option:selected", this).val();
      carrtabcontatos(idlista);
   });


//carrega a tabela da lista de contatos
  $('#selfrasescad').change(function() {
      //var idlista = $("option:selected", this).val();
      //carrtabcontatos(idlista);
      var frase = $("option:selected",this).val();
      $("#txtmsgcomp").val(frase);
      //alert('trocou -> '+frase);
   });
//chama função que grava planos sms 
  $(document).on("click","#cadplanSma",function(){
    var nomePacote = $("#nomePacote").val();
    var Valor = $("#Valor").val();
    cadplanSma(nomePacote,Valor);
  });
// lista buscaplanSma
  $(document).on("click","#buscaplanSma",function(){
    //var nomePacote = $("#nomePacote").val();
    //var Valor = $("#Valor").val();
    //cadplanSma(nomePacote,Valor);
    
    buscaplanSma();"tbodyplanSms"
  });



});//fim document ready