<?php
session_start();
include_once("../naruto/hokage.php");
include_once("../naruto/sask.php");
?>
<!--LEMBRETE
PEGAR LIGAÇÕES ONLINE
use mbilling;
select *from pkg_call_online
-->
<!DOCTYPE html>
<html lang="bt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">

    <title>Mobytel Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/viadoadm.css" rel="stylesheet">
<!--modal-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!--angular-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

<!-- ESTAVA DANDO PROBLEMAS NO MENU 24102017 QUARENTENA
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
-->

    <!--arquivo para upload-->
    <script type="text/javascript" src="up/js/plupload.min.js"></script>
    <!--fim arquivo para upload-->
    <script type="text/javascript" src="js/adm.js"></script>
    <script type="text/javascript" src="js/adm2.js"></script>
    
</head>
<body id="drash" ng-app="">
<!--modal inicio --> 
<div id="myModal" style="display:none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p id='msg'></p>
      </div>
      <div class="modal-footer">
        <button id="fechamod" type="button" class="btn btn-default" >Fechar</button>
      </div>
    </div>

  </div>
</div>
<!--modal fim -->

      <div id="wrapper">
            <?php
            //menu 
                include("navbar.php");
                
            ?>
            <div class="col-lg-12" style="color: pink;font-size: 22px;">
                <?php
                   
                ?>

            </div>

        <div id="page-wrapper">

            <div class="container-fluid">
            <?php
            //boxd de menssagem de boas vindas
                include("bemvindo.php");
                //include("tabvalores.php");
                include("acordeon.php");
            ?>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!--GOOGLE AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--apos carregar a pagina--> 

<script type="text/javascript">

function alteratel(idinput){
//ALTERA O TELEFONE DO CONTATO 
var idListCont=idinput;
var urlsmal = "http://superasms.tk";
var urlpost = urlsmal+"/naruto/sask.php";
var id_user = localStorage.getItem('id');
var tel = $("#tel"+idinput).val();
var dados = "idListCont="+idListCont+"&id_user="+id_user+"&tel="+tel+"&tabela=alteratel";
//inicio ajax
    $.ajax({
            url: urlpost,
            data:dados,
            type:'post',
            dataType:'json',
            beforeSend: function(){
                //chama modal
                $("#td"+idinput).append("<div id='div"+idinput+"' style='text-align:center;' id='conteudomodal' class='modal-body'><img src='../img/banner/aguarde.gif'/></div>");
            },
            success: function(retexcluicampanha){
                $("#div"+idinput+"").empty().slow();
                
            },error:function (erroexcluicampanha){
               $("#div"+idinput+"").empty().slow();
            }
        });//fim ajax
}

    /*funcoes*/
function excluicampanha(userid,campaid){
    //alert("exclui campanha"+userid+" "+campaid);
dados = "userid="+userid+"&campaid="+campaid+"&tabela=excluicampanha";
//inicio ajax
    $.ajax({
            url: urlpost,
            data:dados,
            type:'post',
            dataType:'json',
            beforeSend: function(){

            },
            success: function(retexcluicampanha){
                location.reload();
            },error:function (erroexcluicampanha){
              alert("ocorreu um erro");
            }
        });


}
/*fim funcoes*/
$(document).on("click","#btnGravaUser",function(){
    //mapeia dados do formuário
        var urlpost = urlsmal+"/naruto/hinata.php";
        var id_user = localStorage.getItem('id');
        var txtNome ="";
        var txtSenha ="";
        var dados ="";
    $("#frmAlterPerfil input").map(function(){
        //pega dados
        if($(this).attr("name")=="txtNome"){
             txtNome = $(this).val();
        }else if($(this).attr("name")=="txtSenha"){
             txtSenha = $(this).val();
        }
    });//fim mapeia form
if(txtNome !="" && txtNome !="undefined" && txtSenha !="" && txtSenha !="undefined" ){
 dados = "id_user="+id_user+"&txtNome="+txtNome+"&txtSenha="+txtSenha+"&tabela=frmAlterPerfil";
//inicio ajax
        $.ajax({
                    url: urlpost,
                    data:dados,
                    type:'post',
                    dataType:'json',
                    success: function(retfrmAlterPerfil){
                      if(retfrmAlterPerfil.msg == '1')
                      {
                        $("#msg").append("Gravou");
                        $("#myModal").css("display","inline");

                      }else{
                        $("#msg").append("Ocorreu um erro");
                        $("#myModal").css("display","inline");
                      }
                      //$("#morris-area-chart").append("<div></div>");
                      //$.each(msgreldenvsms, function(key, value) {
                      //respdados =+ value.SendTime+""+value.MessageFrom;
                     //}//fim each
                     //alert(respdados);
                    },error:function (errofrmAlterPerfil){
                      alert(errofrmAlterPerfil+"drahs.php-L195");
                    }
                });
                //fim ajax

 
}else{
    alert("preencha os campos ");
}
        
});    

</script>
<!--fim altera senha-->
<script type="text/javascript">
var id = localStorage.getItem('id');
var listcont =null;
var urlpost = urlsmal+"/naruto/hinata.php";

function carroptlistcont(){
    //btn recarrega options lista de contatos 181017
    $("#slctlistcont option").remove();
    var user_id = $("#iduser").val();
    var dados = "user_id="+user_id+"&tabela=carropt";
    $.ajax({
        url:urlpost,       
        data:dados,
        type:'post',
        dataType:'json',
        success: function(optret){
            $.each(optret, function(key,value){
               $("#slctlistcont").append("<option id='"+value.idListaContatos+"'>"+value.descricao+"</option>");
                    console.log( key + ": " + value);
            });
           //alert("respondeu");
        },
        error:function (opterr){
            console.log("Ocorreu um Erro");
        }
    });
}
function criaoptions(){
        $("#slctlistcont").empty();
        $("#slctlistcont").append("<option id=''>Option</option>");
    var user_id = $("#iduser").val();
    var dados = "user_id="+user_id+"&tabela=carropt";
    $.ajax({
        url:urlpost,       
        data:dados,
        type:'post',
        dataType:'json',
        success: function(optret){
            $.each(optret, function(key,value){
$("#slctlistcont").append("<option id='"+value.idListaContatos+"' value='"+value.idListaContatos+"'>"+value.descricao+"</option>");
                    console.log( key + ": " + value);
            });
           console.log("respondeu");
        },
        error:function (opterr){
            $("#slctlistcont").append("<option id=''>Option</option>");
        }
    });

} 

$('#slctlistcont').change(function(){
     var listcont = $("#slctlistcont option:selected").attr("id");
    localStorage.setItem('idlistcont',listcont);
});
    
        $("#nomeusermsg").append(user);
        $("#usermenu").append(user);
        //verifica se usuário tem permição
        seglogin();

        //verifica se usuário tem permição

//compor menssagem sms
$("#txtmsgcomp").val("");
$(document).on("click","#col4",function(){
    var val = $("#txtmsgcomp").val();
    val = val +"#col4";
    $("#txtmsgcomp").val(val);
});

$(document).on("click","#col5_col6",function(){
    var val = $("#txtmsgcomp").val();
    val = val +"#col5_col6";
    $("#txtmsgcomp").val(val);
});

$(document).on("click","#col11",function(){
    var val = $("#txtmsgcomp").val();
    val = val +"#col11";
    $("#txtmsgcomp").val(val);
});

$(document).on("click","#col12",function(){
    var val = $("#txtmsgcomp").val();
    val = val +"#col12";
    $("#txtmsgcomp").val(val);
});

$(document).on("click","#col13",function(){
    var val = $("#txtmsgcomp").val();
    val = val +"#col13";
    $("#txtmsgcomp").val(val);
});

//grava campanha no banco
$(document).on("click","#cadgravcamp",function(){
    var listcont = localStorage.getItem('idlistcont');

    if($("#nomecamp").val() == ""){
        alert("Preencha o nome da Campanha");
    }else if($("#txtmsgcomp").val() == "" ){
        alert("Preencha o texto da Campanha");
    }else if(listcont == null){
        alert("Selecione o campo lista de contatos");
    }{

    //grava campanha
    var nomecamp = $("#nomecamp").val();
    //alert("nome camp-> "+ $("#nomecamp").val());
    var val = $("#txtmsgcomp").val();
    //alert("valor = "+val+" || id= "+id);
    

 dados = "iduser="+id+"&txt="+val+"&nomecamp="+nomecamp+"&idlistcont="+listcont+"&tabela=cadcampanhasmsmont";
   $.ajax({
        url: urlpost,
        data:dados,
        type:'post',
        dataType:'json',
        success: function(msg5){
        alert('Campanha cadastrada');
          location.reload();
          localStorage.setItem('idlistcont',null);
           //$("#bs-accordion-group-13").togle();
        },error:function (resposta5){
          console.log("erro"+resposta5);
          localStorage.setItem('idlistcont',null);
        }

      });



    }//fim else
    
});

//fim compor msg sms

        //função que verifica as ligações online
        //callonline();
//função que manda sms a vulso
       
//função que manda sms a vulso
$(document).on("click","#abreacord",function(){
    $("#txtmsg").val("");
});
        $(document).on("click","#btnEnvSms",function(){
            var id = localStorage.getItem('id');
            var txtmsg = $("#txtmsg").val();
            var numtel = $("#numtel").val();
            var cont = numtel.length;
            var valida = $.isNumeric(numtel);
            if(cont != 9){
                alert("o formato do telefone deve ser EX: 31999999999");
            }else if(valida == false){
                alert("apenas numeros por favor");
                $("#numtel").val("");
            }else if(numtel == undefined || numtel== null || numtel ==" ")
           {

            alert("preencha o campo Telefone");
           }else if(txtmsg == undefined || txtmsg == null ||txtmsg=="")
           {
             alert("preencha o campo Menssagem");   
           }else{
            
         //envia a reqiosição ajax
        var dados = "iduser="+id+"&numtel="+numtel+"&txtmsg="+txtmsg+"&tabela=msgavulso";
                $.ajax({
                    url:urlpost,       
                    data:dados,
                    type:'post',
                    dataType:'json',
                    beforeSend: function() {

                    },        
                    success: function(msgret){ 
                        alert("Menssagem Enviada!! ");

                    },
                    error:function (msgerr){
                        console.log("Ocorreu um Erro");
                    }
                });

           }

        });


</script>
<!--script de upload-->
<script type="text/javascript">
// Custom example logic
var uploader = new plupload.Uploader({
    runtimes : 'html5,flash,silverlight,html4',
    browse_button : 'pickfiles', // you can pass an id...
    container: document.getElementById('container'), // ... or DOM Element itself
    url : 'up/upload.php',/*arquivo que recebe o upload*/
    flash_swf_url : '../js/Moxie.swf',
    silverlight_xap_url : '../js/Moxie.xap',
    
    filters : {
        max_file_size : '100000mb',
        mime_types: [
            {title : "text", extensions :"csv,xlsx,txt" }
        ]
    },

    init: {
        PostInit: function() {
            document.getElementById('filelist').innerHTML = '';

            document.getElementById('uploadfiles').onclick = function() {
                uploader.start();
                return false;
            };
        },

        FilesAdded: function(up, files) {
            plupload.each(files, function(file) {
                document.getElementById('filelist').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
            });
        },

        UploadProgress: function(up, file) {

document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
            if(file.percent==100)
            {
                alert("estamos inserindo sua lista no banco de dados");
            }
        },
        Error: function(up, err) {
            //document.getElementById('console').appendChild(document.createTextNode("\nError #" + err.code + ": " + err.message));
            if(err.message == "File extension error.")
            {
                alert("Extenção não permitida escolha um arquivo .csv,.xlsx ou .txt");
            }else{
                console.log("Ocorreu um erro: "+err.message);
            }
            
        }
    }
});

uploader.init();

</script>
<!--script de upload-->

</body>
<div id="aguardegif" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          <div style="text-align: center;" id="conteudomodal" class="modal-body">
             <img src="../img/banner/aguarde.gif"/>     
          </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
</html>
