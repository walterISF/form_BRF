$(document).ready(function() {
var codigo;
	$("#inscreva").click(function(){
		  var nome = $("#nome").val();
		  var sobrenome = $("#sobrenome").val();
		  var empresa = $("#empresa").val();
		  var razaoSocial = $("#RazaoSocial").val();
		  var cargo = $("#cargo").val();
		  var departamento = $("#departamento").val();
		  var segmento = $("#segmento").val();
		  var telefoneCel = $("#telefoneCel").val();		  
		  var telefoneCom = $("#telefoneCom").val();
		  var email = $("#email").val();

		  codigo = Math.floor((Math.random() * 1000000000) + 1);
	
		  $('#cliente_form').submit(function(){

				  var banco = $.ajax({
				    url: 'banco.php',
				    dataType: 'json',
				    data: {	
				      'codigo':codigo,
				      'nome': nome,
				      'sobrenome': sobrenome,
				      'empresa' : empresa,
				      'razaoSocial': razaoSocial,
				      'cargo' : cargo,
				      'departamento' : departamento,
				      'segmento': segmento,
				      'telefoneCel' : telefoneCel,
				      'telefoneCom' : telefoneCom,
				      'email' : email,
				    } ,
				    async: false,
				  }).responseText;

			
		  });
		$('#cliente_form').each (function(){
		  this.reset();
		});

		$('#mdSucesso').modal('show');
		return false;
	});
	$("#validar").click(function(){
		var validacao = $("#validacao").val();
		 var banco = $.ajax({
				    url: 'banco.php',
				    dataType: 'json',
				    data: {	
				      'validacao':validacao,
				    } ,
				    success: function(data) {
					  //console.log(data);
					  
					  if(data != false){
					  	$('#textoValidacao').css('display','none');
					  	$('#questionario').css('display','block');
					  }else{
					  	$('#questionario').css('display','none');
					  	$("#textoValidacao").css('display','block');
					  	$("#textoValidacao").append("<h3>Insira um código válido!</h3>");
					  }
					},
				    async: false,
				  }).responseText;
	});
	$("#limpar").bind("click", function() {
	  $("input[type=text], textarea").val("");
	  $("input[type=checkbox]").attr('checked',false);
	});

var resposta1 = "R:";
var resposta2 = "R:";
var resposta3 = "R:";
var resposta4 = "R:";
var resposta5 = "R:";
var resposta6 = "R:";
var resposta7 = "R:";
var resposta8 = "R:";
var resposta9 = "R:";
var resposta10 = "R:";

$('#envio').click(function(){


//################################################# questao 1 ###################################################  
	var questao1 = $('.q1');  
	for (var i=0;i<questao1.length;i++){  
		if (questao1[i].checked == true){  
			// CheckBox Marcado... Faça alguma coisa... Ex:
			//alert(resposta[i].value + " marcado.");
			resposta1 += ' '+ questao1[i].value+';';
			if(i==questao1.length-1){
				resposta1 += $('#o1').val();
			} 
		}  else {
			// CheckBox Não Marcado... Faça alguma outra coisa...
			
			
		}
	}
//################################################# questao 2 ###################################################
	var questao2 = $('.q2'); 
	for (var i=0;i<questao2.length;i++){  
		if (questao2[i].checked == true){  
			// CheckBox Marcado... Faça alguma coisa... Ex:
			//alert(resposta[i].value + " marcado.");
			resposta2 += ' '+ questao2[i].value+';';
			if(i==questao2.length-1){
				resposta2 += $('#o2').val()+';';
			} 
		}  else {
			// CheckBox Não Marcado... Faça alguma outra coisa...
			
			
		}
	}
	
//################################################# questao 3 ####################################################
resposta3 += $('#q31').val()+';'+ $('#q32').val();


//################################################# questao 4 ####################################################
resposta4 += $('#q4').val();


//################################################# questao 5 ####################################################

	var questao5 = $('.q5'); 
	for (var i=0;i<questao5.length;i++){  
		if (questao5[i].checked == true){  
			// CheckBox Marcado... Faça alguma coisa... Ex:
			//alert(resposta[i].value + " marcado.");
			resposta5 += ' '+ questao5[i].value+';';
			if(i==questao5.length-1){
				resposta5 += $('#o5').val()+';';
			} 
		}  else {
			// CheckBox Não Marcado... Faça alguma outra coisa...
			
			
		}
	}

//################################################# questao 6 ####################################################
	var questao6 = $('.q6'); 
	for (var i=0;i<questao6.length;i++){  
		if (questao6[i].checked == true){  
			// CheckBox Marcado... Faça alguma coisa... Ex:
			//alert(resposta[i].value + " marcado.");
			resposta6 += ' '+ questao6[i].value+';';
			if(i==questao6.length-1){
				resposta6 += $('#o6').val()+';';
			} 
		}  else {
			// CheckBox Não Marcado... Faça alguma outra coisa...
			
			
		}
	}

//################################################# questao 7 ####################################################
	var questao7 = $('.q7'); 
	for (var i=0;i<questao7.length;i++){  
		if (questao7[i].checked == true){  
			// CheckBox Marcado... Faça alguma coisa... Ex:
			//alert(resposta[i].value + " marcado.");
			resposta7 += ' '+ questao7[i].value+';';
			if(i==questao7.length-1){
				resposta7 += $('#o7').val()+';';
			} 
		}  else {
			// CheckBox Não Marcado... Faça alguma outra coisa...
			
			
		}
	}

//################################################# questao 8 ####################################################
	var questao8 = $('.q8'); 
	for (var i=0;i<questao8.length;i++){  
		if (questao8[i].checked == true){  
			// CheckBox Marcado... Faça alguma coisa... Ex:
			//alert(resposta[i].value + " marcado.");
			resposta8 += ' '+ questao8[i].value+';';
			if(i==questao8.length-1){
				resposta8 += $('#o8').val()+';';
			} 
		}  else {
			// CheckBox Não Marcado... Faça alguma outra coisa...
			
			
		}
	}

//################################################# questao 9 ####################################################
resposta9 += $('#q91').val()+';'+ $('#q92').val()+';'+ $('#q93').val()+';'+ $('#q94').val();

//################################################# questao 10 ####################################################
resposta10 += $('#q10').val();
//################################################# FIM ####################################################
		if(nome==""|| sobrenome==""||empresa=="" || cargo==""|| departamento==""|| email==""|| telefoneCom==""|| resposta1==""|| resposta2==""|| resposta3==""|| resposta4==""|| resposta5==""|| resposta6==""|| resposta7==""|| resposta8==""|| resposta9==""|| resposta10=="") {
			$('#mdAviso').modal('show');
			return false;
		}
		if(nome!=""&& sobrenome!=""&&empresa!="" && cargo!=""&& departamento!=""&& email!=""&& telefoneCom!=""&& resposta1!=""&& resposta2!=""&& resposta3!=""&& resposta4!=""&& resposta5!=""&& resposta6!=""&& resposta7!=""&& resposta8!=""&& resposta9!=""&& resposta10!=""){

$('#ajax_form').submit(function(){
	
		var gravacao = $.ajax({
		    url: 'enviarEmail.php',
		    dataType: 'json',
		    data: {	
		      'resposta1' : resposta1,
		      'resposta2' : resposta2,
		      'resposta3' : resposta3,
		      'resposta4' : resposta4,
		      'resposta5' : resposta5,
		      'resposta6' : resposta6,
		      'resposta7' : resposta7,
		      'resposta8' : resposta8,
		      'resposta9' : resposta9,
		      'resposta10' : resposta10,
		    } ,
		    async: false,
		  }).responseText;
		window.location.href= 'enviarEmail.php';
});
		    /*desabilita o submit do form*/

		}

});

});

/*mascara de email para validar campos*/

$(document).ready(function(){
   $("#email").change(function(){
      var email = $("#email").val();

      if(email != "")
      {
         var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
         if(filtro.test(email))
         {
            $('#email').css({'border' : ''});
            $('#envio').enable;
          
        return true;
         } else {

           $('#email').css({'border' : '2px solid red'});
           $('#envio').disable;
           return false;
         }
      } else {

           }
   });
});


$(document).ready(function(){
   $('#news').click(function(){
      var emailNews = $("#emailNews").val();

      if(emailNews != "")
      {
         var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
         if(filtro.test(emailNews))
         {
            $('#emailNews').css({'border' : ''});

					var news = $('#emailNews').val();
					var gravacao = $.ajax({
					    url: 'API/src/contatosImportar.php',
					    dataType: 'json',
					    data: {	
					      'news': news,
					    } ,
					    async: false,
					  }).responseText;
          
        return true;
         } else {

           $('#emailNews').css({'border' : '2px solid red'});

           return false;
         }
      } else {

           }
   });
});
$(document).ready(function(){
   $("#emailContato").change(function(){
      var emailContato = $("#emailContato").val();

      if(emailContato != "")
      {
         var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
         if(filtro.test(emailContato))
         {
            $('#emailContato').css({'border' : ''});
          
        return true;
         } else {

           $('#emailContato').css({'border' : '2px solid red'});

           return false;
         }
      } else {

           }
   });
});

//mascara telefone
  function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
  }
  function execmascara(){
    v_obj.value=v_fun(v_obj.value)
  }
  function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
  }
  function id( el ){
    return document.getElementById( el );
  }
  window.onload = function(){
    id('telefoneCom').onkeypress = function(){
      mascara( this, mtel );
    }
    id('telefoneCel').onkeypress = function(){
      mascara( this, mtel );
    }
  }

$(document).ready(function() {

    $("#telefoneCom").bind('paste', function(e) {
        e.preventDefault();
    });
    $("#telefoneCel").bind('paste', function(e) {
        e.preventDefault();
    });
});

$(document).ready(function(){
	$('#btnContato').click(function(){

		$('#formularioContato').submit(function(){
			var nome = $('#nomeContato').val();
			var email = $('#emailContato').val();
			var assunto = $('#assuntoContato').val();
			var mensagem = $('#mensagemContato').val();

			$('#nomeContato').val('');

			$('#emailContato').val('');

			$('#assuntoContato').val('');

			$('#mensagemContato').val('');
			if(nome != "" && email != "" && assunto != "" && mensagem != "")
			{
				var gravacaoContato = $.ajax({
					    url: 'contato.php',
					    dataType: 'json',
					    data: {	
					      'nome': nome,
					      'email': email,
					      'assunto' : assunto,
					      'mensagem' : mensagem,
					    } ,
					    async: false,
					  }).responseText;

			}
			return false;
		});
	});
});