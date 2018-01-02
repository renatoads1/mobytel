//Storage.removeItem('lastname');       // apagar a entrada "lastname"
//Storage.clear();                     // apagar tudo o que está no local storage
//alert(localStorage.getItem('lastname'));

$(document).ready(function(){

var urlpost = "http://superasms.tk/naruto/hinata.php";
var masterUrl = "http://superasms.tk";
//abrindo os trabalhos kkk
var url = window.location.href;// get url server
localStorage.setItem('url',url); // gravar
//Storage.removeItem('url');           // apagar a entrada "lastname"
//Storage.clear();                          // apagar tudo o que está no local storage
var endereco = localStorage.getItem('url');
//alert(endereco);

$("#nome").val();
$("#email").val();
$("#assunto").val();
$("#msg").val();

/*campo de teste*/

/*fim campo de teste*/
/*FUNCOES DO SISTEMA*/

//funcao que envia uma array serializada por ajax
function enviajax(urlpag,strdados){

var urlenv = urlpag;
var querdados = strdados;
      
      $.ajax({
        url: urlenv,
        contentType: 'application/x-www-form-urlencoded; charset=ISO-8859-1',
        data:querdados,
        type:'post',
        dataType:'json',
        success: function(msg2){
            return true;
        },error:function (resposta2){
            return false;
          }
      });
}

//serializa uma string para enviar por ajax
function serializaform(idform,tabela){
  var tab = tabela;
  var id = idform;
  var  queryfran = "";
      var dadosfran = "";//serializeArray
      dadosfran = $(id).serializeArray();
        $.each(dadosfran, function(i, field){
          queryfran += field.name+"="+field.value+"&";      
        });
        //acrecenta a variavel tabela com o nome do form
        queryfran = queryfran+"tabela="+tabela;
        //var str = queryfran.substring(0,(queryfran.length - 1));
        return queryfran;
}

//chama modal
function chamamodal(msg){

  $('#myModal').modal('show');
  $("#myModal").attr("style","display:inline;");

//$('#myModal').modal();                      
//$('#myModal').modal({ keyboard: false });   
//$('#myModal').show();
}
/*EVENTO PADRÃO PARA TODO O SISTEMA ->VALIDAÇÃO -> CHECAGEM -> CONSULTA*/
//Busca cep 
   $("#cep").change(function(){
      var cep_code = $(this).val();
      if( cep_code.length <= 0 ) return;
      $.get("http://apps.widenet.com.br/busca-cep/api/cep.json", { code: cep_code },
         function(result){
            if( result.status!=1 ){
               alert(result.message + "Houve um erro desconhecido");
               return;
            }
            $("input#cep").val( result.code );
            $("input#uf").val( result.state );
            $("input#cid").val( result.city );
            $("input#bairro").val( result.district );
            $("input#ender").val( result.address );
            //$("input#estado").val( result.state );
         });
   });
   //Busca cep 2 
   $("#cepinv").change(function(){
      var cep_code = $(this).val();
      if( cep_code.length <= 0 ) return;
      $.get("http://apps.widenet.com.br/busca-cep/api/cep.json", { code: cep_code },
         function(result){
            if( result.status!=1 ){
               alert(result.message + "Houve um erro desconhecido");
               return;
            }
              $("input#cepinv").val( result.code );
              $("input#ufinv").val( result.state );
              $("input#cidinv").val( result.city );
         });
   });
/* FIM FUNCOES DO SISTEMA*/
/* EVENTOS DO SISTEMA*/

//efetua funções de login e senha
$(document).on("click","#btnfrmlogin",function(){
  //frmlogin
  
  queryfrm = serializaform("#frmlogin","frmlogin");
  var senha = $("#password").val();
  localStorage.setItem('senha',senha);
    $.ajax({
        url: urlpost,
        contentType: 'application/x-www-form-urlencoded; charset=ISO-8859-1',
        data:queryfrm,
        type:'post',
        dataType:'json',
        beforeSend:function(){

        },success: function(msg2){
              if((msg2.user != null && msg2.user != undefined) &&( msg2.id != null && msg2.id != undefined))
              {
                localStorage.setItem('user',msg2.user);
                localStorage.setItem('id',msg2.id);
                window.location.href = 'http://superasms.tk/admin/drash.php';
              }else{
                $("#user").val("");
                $("#password").val("");
                alert("usuario ou senha incorreto");
                Storage.clear(); 
              }
          },error:function (resposta2){
             Storage.clear(); 
            alert("usuário ou senha invalido"+resposta2); 
          }
      });
 
});
//aou sair do input login
/*
$(document).on("focusout","#user",function(){

 var teste  =  $("#user").val()  
var car = teste.charCodeAt(1);
alert(car);

});
*/

//envia form da pagina franquia
$(document).on("click","#btnenvfrank",function(){
    var string = "";
    var tabela = $(this).attr("id_bt_form");
    var id ="#"+ tabela;
    //chama função que serealiza form passando o nome do form
    string = serializaform(id,tabela);
    var bol = false;
    bol = enviajax(urlpost,string);
    console.log(bol);
    //alert(string);
});
//evento limpa form franquia
$(document).on("click","#limpafranq",function(){
    var test = $(this).attr("id_form");
    //alert(test);
    $("#"+test).each (function()
    {
      this.reset();
    });
});
//evento limpa form
$(document).on("click","#limpaform",function(){
    var test = $(this).attr("id_form");
    $("#"+test).each (function()
    {
      this.reset();
    });
});

//evento que manda formulário para email
$("#btnenvmsgfcn").click(function(){
    var  queryfcn = "";
    var dadosfcn = "";
    var dadosfcn = $("#falconformpg").serializeArray();
    $.each(dadosfcn, function(i, field){
          queryfcn += field.name+"="+field.value+"&";
          console.log(queryfcn);
        });
        //requisição linda 
    $.ajax({
              url: "http://superasms.tk/naruto/hinata.php",
              contentType: 'application/x-www-form-urlencoded; charset=ISO-8859-1',
              data:queryfcn,
              type:'post',
              dataType:'json',
              beforeSend: function () {//Aqui adicionas o loader
                $('#aguardegif').modal('show');
              },
              success: function(msg2){
                  $('#aguardegif').modal('hide');
                  alert("sua msg foi enviada");

              },error:function (resposta2){
                $('#aguardegif').modal('hide');
                    console.log(resposta);
                    alert("sua msg foi enviada");
                }
            });/*fim do carregamento inicial da tabela de relatórios*/
    alert("sua msg foi enviada");

});
/*ajax do ligme*/
 $("#enviar").click(function(){
   
         /*http://187.94.66.40/mbilling/index.php/call0800Web?user=014000&complemento=31&number=988398385*/
          var number = $('#number').val();
          alert(number);
          //valida input
          if(number =="" || number == null){
            alert("preencha o campo telefone");
          }else{

                  var contnum = number.length;
                  if(contnum > 8){
                    //ok
                  }else{
                    number = "9"+number;
                  }

            var dados = "complemento="+$('#complemento').val()+"&number="+number;
             /*http://187.94.66.40/mbilling/index.php/call0800Web?user=007004*/ 
              $.ajax({
              url: "http://mobyadmin.tk/index.php/call0800Web?user=007004",
              data:dados,
              type:'post',
              dataType:'json',                            
              beforeSend: function () {//Aqui adicionas o loader
                $('#aguardegif').modal('show');
              },
              success: function(msg){
                $('#aguardegif').modal('hide');
                alert("estamos ligando para você");
              },
              error:function (resposta){
                $('#aguardegif').modal('hide');
                            //alert("Erro de requisição http"+resposta);
                          }
            });/*fim do carregamento inicial da tabela de relatórios*/
        }//fim do else valida input
         
    });
//ajax magico
//pega form
$("#btnform").click(function(){
    //coloque o id do form que o jquery traz os dados dos inputs pelos name numa query 
    var dados3 = "";
    var dados2 = $("#index-contato").serializeArray();
    //montando string post dados
    $.each(dados2, function(i, field){
        dados3 += field.name+"="+field.value+"&";
        });
    //requisição linda 
    $.ajax({
              url: "http://superasms.tk/naruto/hinata.php",
              contentType: 'application/x-www-form-urlencoded; charset=ISO-8859-1',
              data:dados3,
              type:'post',
              dataType:'json',              
              beforeSend: function () {//Aqui adicionas o loader
                $('#aguardegif').modal('show');
              },
              success: function(msg){
                $('#aguardegif').modal('hide');
                  alert("sua msg foi enviada");
              },error:function (resposta){
                $('#aguardegif').modal('hide');
                    console.log(resposta);
                }
            });/*fim do carregamento inicial da tabela de relatórios*/

});
//formulário dos modal
$("#btnformModal").click(function(){
    //coloque o id do form que o jquery traz os dados dos inputs pelos name numa query 
    var dados3 = "";
    var dados2 = $("#index-contatoModal").serializeArray();
    //montando string post dados
    $.each(dados2, function(i, field){
        dados3 += field.name+"="+field.value+"&";
        });
    //requisição linda 
    $.ajax({
              url: "http://superasms.tk/naruto/hinata.php",
              contentType: 'application/x-www-form-urlencoded; charset=ISO-8859-1',
              data:dados3,
              type:'post',
              dataType:'json',
              beforeSend: function () {//Aqui adicionas o loader
                $('#myModal').modal('hide');
                $('#aguardegif').modal('show');
                  $("#myModal").attr("style","display:inline;");
              },success: function(msg){
                $('#aguardegif').modal('hide');
                //alert("sua msg foi enviada");
              },error:function (resposta){
                    console.log(resposta);
                    $('#aguardegif').modal('hide');
                }
            });/*fim do carregamento inicial da tabela de relatórios*/

});

//separador
$("#btn-assineja").on({
    mouseenter: function(){
        $(this).attr("src", "/img/btn-assineja-b.fw.png");
    }, 
    mouseleave: function(){
       $(this).attr("src", "/img/btn-assineja-a.fw.png");
    }, 
    click: function(){
        chamamodal("teste");
        //alert("clicou");
    } 
});
$("#btn-assineja1").on({
    mouseenter: function(){
        $(this).attr("src", "/img/btn-assineja-b.fw.png");
    }, 
    mouseleave: function(){
       $(this).attr("src", "/img/btn-assineja-a.fw.png");
    }, 
    click: function(){
        chamamodal("teste");//alert("clicou");
    } 
});
$("#btn-assineja2").on({
    mouseenter: function(){
        $(this).attr("src", "/img/btn-assineja-b.fw.png");
    }, 
    mouseleave: function(){
       $(this).attr("src", "/img/btn-assineja-a.fw.png");
    }, 
    click: function(){
        chamamodal("teste");
        //alert("clicou");
    } 
});
$("#btn-assineja3").on({
    mouseenter: function(){
        $(this).attr("src", "/img/btn-assineja-b.fw.png");
    }, 
    mouseleave: function(){
       $(this).attr("src", "/img/btn-assineja-a.fw.png");
    }, 
    click: function(){
        chamamodal("teste");
        //alert("clicou");
    } 
});
$("#btn-assineja4").on({
    mouseenter: function(){
        $(this).attr("src", "/img/btn-assineja-b.fw.png");
    }, 
    mouseleave: function(){
       $(this).attr("src", "/img/btn-assineja-a.fw.png");
    }, 
    click: function(){
        chamamodal("teste");
        //alert("clicou");
    } 
});
//separador
                                    
$("#btn-assineja").on({
    mouseenter: function(){
        $(this).attr("src", "/img/btn-assineja-b.fw.png");
    }, 
    mouseleave: function(){
       $(this).attr("src", "/img/btn-assineja-a.fw.png");
    }, 
    click: function(){
        chamamodal("teste");
        //alert("clicou");
    } 
});
$("#btn-assineja1").on({
    mouseenter: function(){
        $(this).attr("src", "/img/btn-assineja-b.fw.png");
    }, 
    mouseleave: function(){
       $(this).attr("src", "/img/btn-assineja-a.fw.png");
    }, 
    click: function(){
        chamamodal("teste");
        //alert("clicou");
    } 
});
$("#btn-assineja2").on({
    mouseenter: function(){
        $(this).attr("src", "/img/btn-assineja-b.fw.png");
    }, 
    mouseleave: function(){
       $(this).attr("src", "/img/btn-assineja-a.fw.png");
    }, 
    click: function(){
        chamamodal("teste");
        //alert("clicou");
    } 
});
$("#btn-assineja3").on({
    mouseenter: function(){
        $(this).attr("src", "/img/btn-assineja-b.fw.png");
    }, 
    mouseleave: function(){
       $(this).attr("src", "/img/btn-assineja-a.fw.png");
    }, 
    click: function(){
        chamamodal("teste");
        //alert("clicou");
    } 
});
$("#btn-assineja4").on({
    mouseenter: function(){
        $(this).attr("src", "/img/btn-assineja-b.fw.png");
    }, 
    mouseleave: function(){
       $(this).attr("src", "/img/btn-assineja-a.fw.png");
    }, 
    click: function(){
        chamamodal("teste");
        //alert("clicou");
    } 
    });
$("#vertodosprod").on({
    mouseenter: function(){
        $(this).attr("src", "img/btnVerTodos.fw.png");
    }, 
    mouseleave: function(){
       $(this).attr("src", "img/btnVerTodos0.fw.png");
    }, 
    click: function(){
        chamamodal("teste");
        //alert("clicou");
    } 
    });
/*evento de botões de produtos*/
$("#telefoneipum").on({click: function(){
    chamamodal("teste");
  },mouseenter:function(){
     $(this).attr("src", "img/imgprodutos/telefoneip16151.jpg");
  },mouseleave:function(){
      $(this).attr("src", "img/imgprodutos/telefoneip1615.jpg");
  }
 }); 
$("#telefoneipdois").on({click: function(){
    chamamodal("teste");
  },mouseenter:function(){
     $(this).attr("src", "img/imgprodutos/telefoneip16251.jpg");
    // alert("entra");
  },mouseleave:function(){
      $(this).attr("src", "img/imgprodutos/telefoneip1625.jpg");
      //alert("sai");
  }
 });
 $("#ataht812").on({click: function(){
    chamamodal("teste");
  },mouseenter:function(){
     $(this).attr("src", "img/imgprodutos/ataht8121.jpg");
    // alert("entra");
  },mouseleave:function(){
      $(this).attr("src", "img/imgprodutos/ataht812.jpg");
      //alert("sai");
  }
 }); 
  $("#switch").on({click: function(){
    chamamodal("teste");
  },mouseenter:function(){
     $(this).attr("src", "img/imgprodutos/switch1.fw.png");

  },mouseleave:function(){
      $(this).attr("src", "img/imgprodutos/switch.fw.png");
  }
 });   
/*fim dos eventos dos botões dos produtos*/

$("#logo").on({click: function(){
    //coloca uma imagem na tela
    window.location.href = masterUrl;
    //chama a função que apresenta o modal
  }

});
//limpa os botões do modal
$("#btnformModalLimpa").click(function(){
    document.getElementById("index-contatoModal").reset();
});



/*FIM DOS  EVENTOS DO SISTEMA*/
});