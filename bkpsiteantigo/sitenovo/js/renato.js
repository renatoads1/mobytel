$(document).ready(function(){
//abrindo os trabalhos kkk
alert("ola mundo");
$("#nome").val();
$("#email").val();
$("#assunto").val();
$("#msg").val();

//função do calme
 $("#enviar").click(function(){
   
         /*http://187.94.66.40/mbilling/index.php/call0800Web?user=014000&complemento=31&number=988398385*/
          var number = $('#number').val();
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
              
              $.ajax({
              url: "http://187.94.66.40/mbilling/index.php/call0800Web?user=007004???",
              data:dados2,
              type:'post',
              dataType:'json',
              success: function(msg){
           
              },error:function (resposta){
                            console.log(resposta);
                          }
            });/*fim do carregamento inicial da tabela de relatórios*/
        }//fim do else valida input
         
    });

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
              url: "http://www.mobytel.com.br/naruto/hinata.php",
              contentType: 'application/x-www-form-urlencoded; charset=ISO-8859-1',
              data:dados3,
              type:'post',
              dataType:'json',
              success: function(msg){
           
              },error:function (resposta){
                            console.log(resposta);
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
        alert("clicou");
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
        alert("clicou");
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
        alert("clicou");
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
        alert("clicou");
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
        alert("clicou");
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
        alert("clicou");
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
        alert("clicou");
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
        alert("clicou");
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
        alert("clicou");
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
        alert("clicou");
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
        alert("clicou");
    } 
    });
});