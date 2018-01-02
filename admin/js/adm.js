//Storage.removeItem('lastname');       // apagar a entrada "lastname"
//Storage.clear();                     // apagar tudo o que está no local storage
//alert(localStorage.getItem('lastname'));
var urlsmal - "http://superasms.tk";
var urlpost = "http://superasms.tk/naruto/hinata.php";
var urlpostmin = "http://superasms.tk/naruto/minato.php";
var endereco = localStorage.getItem('url');
var user = localStorage.getItem('user');
var senha = localStorage.getItem('senha');
var id = localStorage.getItem('id');

function jitter(){
  $.get(urlpostmin+"?get=1", function() {
  console.log("jitter minato");
  });
}
function reldenvsms(userid,campanhaid){
  var respdados = "";
   dados = "id="+userid+"&campanha="+campanhaid+"&tabela=reldenvsms";
   $.ajax({
        url: urlpost,
        data:dados,
        type:'post',
        dataType:'json',
        success: function(msgreldenvsms){
          console.log("retornou ok ");
          //$("#morris-area-chart").append("<div></div>");
          //$.each(msgreldenvsms, function(key, value) {
          //respdados =+ value.SendTime+""+value.MessageFrom;
         //}//fim each
         //alert(respdados);
        },error:function (respostareldenvsms){
          console.log(respostareldenvsms);
        }
          });


}

/*
//carrega os options da pagina grash passo2 cadastra campanha
function buscadescricoesopt(id){
   dados = "id="+id+"&tabela=cadcampopt";
    $("#slctlistcont").clear();
   $.ajax({
        url: urlpost,
        data:dados,
        type:'post',
        dataType:'json',
        success: function(msg5){
          $.each( msg5, function( key, value ) {
            //08102017
            //append child aqui
            $("#slctlistcont").append("<option id_lc='"+value.descricao+"'>"+value.idListaContatos+"</option>");
            //alert( key + ": " + value.descricao+":"+value.idListaContatos );
          });
          console.log(msg5);
        },error:function (resposta5){
          console.log(resposta5);
        }

      });
}
*/
function dispara(idcamp,iduser){

    dados = "userid="+iduser+"&id_campanha="+idcamp+"&tabela=disparacampanha";
   $.ajax({
        url: urlpost,
        data:dados,
        type:'post',
        dataType:'json',
        success: function(msg5){
          console.log(msg5);
        },error:function (resposta5){
          console.log(resposta5);
        }

      });
}
function geraboleto(id,iduser){
  dados = "id="+iduser;
   $.ajax({
        url: urlsmal+"/admin/gerencianet.php",
        data:dados,
        type:'post',
        dataType:'json',
        success: function(msg5){
          console.log(msg5);
        },error:function (resposta5){
          console.log(resposta5);
        }

      });
  /*
  tenho que gerar a transação 
  pegar o retorno cod barras 
  gerar o boleto e gravar os dados todos no banco
  depois 
  */
  //alert("id="+id);

}

function seglogin(){
var urlenv = urlpost;

var dados= "user="+user+"&password="+senha+"&tabela=frmlogin";
     $.ajax({
        url: urlenv,
        contentType:'application/x-www-form-urlencoded; charset=ISO-8859-1',
        data:dados,
        type:'post',
        dataType:'json',
        success: function(msg2){
             if((msg2.user != null && msg2.user != undefined) &&( msg2.id != null && msg2.id != undefined))
              {
                console.log("permitido");
              }else{
                
                console.log("Expulsa");
                $("#user").val("");
                $("#password").val("");
                localStorage.setItem('user',"");
                localStorage.setItem('id',"");
                window.location.href = urlsmal+'/admin/login.php';
              }
        },error:function (resposta2){
               
               console.log("Expulsa");
                $("#user").val("");
                $("#password").val("");
                localStorage.setItem('user',"");
                localStorage.setItem('id',"");
                window.location.href = urlsmal+'/admin/login.php';
          }
      });
      
}
//função termina cessao

function exitlogin(){
  console.log("Expulsa");
  $("#user").val("");
  $("#password").val("");
  localStorage.setItem('user',"");
  localStorage.setItem('id',"");
  window.location.href = urlsmal+'/admin/login.php';

}

//fim das funçoes  contentType:'application/x-www-form-urlencoded; charset=ISO-8859-1',
//faça de 3 em 3 segundos
setInterval(function(){ 
    var dados = "user="+user+"&id="+id+"&tabela=calonline";
    $.ajax({
        url: urlsmal+"/naruto/hinata.php",       
        data:dados,
        type:'post',
        dataType:'json',
        beforeSend: function() {
         $("#acordonline").empty();
        },        
        success: function(msg3){ 
          if(msg3.msg == 0){
            console.log(msg3.msg);
          }else{
            //inicio 
            var i=0;//leia as linha 
                $.each(msg3, function() {
                $("#acordonline").append("<div id='ligonl"+i+"' class='alert alert-warning alert-dismissable'>");
                    //leia os caract da linha
                    $.each(this, function(index, value) {
                      if(index == "username"){
                        $("#ligonl"+i).append("&nbsp;username: "+value+"&nbsp;");

                      }else if(index == "ndiscado")
                      { 
                        $("#ligonl"+i).append("&nbsp;Nº Discado: "+value+"&nbsp;");
                      }else{ }
                      //(index + '=' + value);
                    });
                $("#acordonline").append("</div>");
               i++;
              });//fim
          }
        },error:function (resposta3){
          $("#acordonline").empty();
          console.log("erro"+resposta3);
        }
    });
},57000);
//faça de 10 em 10 segundos
setInterval(function(){ 
seglogin();
}, 74000);
setInterval(function(){ 
  //jitter();
}, 4000);
//aqui fica o mapiamento dos botoes
$(document).on("click","#btnContatos",function(){
  $("#btnContatos").append("auheuaeh");
  //alert("ola mundo meu pau");
});

//carrega input 
$("#slctlistcontopt").on({
    mouseenter: function(){
      //busca as descrições
      var iduser = $("#iduser").val();
      console.log(iduser+" ->ok");
      //buscadescricoesopt(iduser);
      //alert("porra enter");
    }
});
/*
$("#col4").click(function(){
alert("nome");
});
$("#col5_col6").click(function(){
alert("ddd_Telefone");
});
$("#col11").click(function(){
alert("Valor Recuperar");
}); 
$("#col12").click(function(){
alert("Atraso Recuperar");
});
$("#col13").click(function(){
alert("Minimo");
}); 
*/
