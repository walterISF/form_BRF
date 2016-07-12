<?php 

	$nome = $_GET['nome'];
	$sobrenome = $_GET['sobrenome']; 
	$empresa = $_GET['empresa'];
	$cargo = $_GET['cargo'];
	$departamento = $_GET['departamento']; 
	$telefoneCom = $_GET['telefoneCom'];
	$email = $_GET['email'];
	$resposta1 = $_GET['resposta1'];
	$resposta2 = $_GET['resposta2'];
	$resposta3 = $_GET['resposta3'];
	$resposta4 = $_GET['resposta4'];
	$resposta5 = $_GET['resposta5'];
	$resposta6 = $_GET['resposta6'];
	$resposta7 = $_GET['resposta7'];
	$resposta8 = $_GET['resposta8'];
	$resposta9 = $_GET['resposta9'];
	$resposta10 = $_GET['resposta10'];

	$assunto = 'Questionário';

	//Envio de email para grupo netglobe

	$email_destino = 'walter.inacio@netglobe.com.br;josiane.santana@netglobe.com.br';
	//$email_destino = 'Web e Ponto <contato@webeponto.com.br>';

	$message  = utf8_decode( '
		<!doctype html>
<html>
<head>
<meta charset="utf-8" />
</head>

<body>
				<h2 style="padding-left:220px;;font-family: arial">Dados do Cliente</h2>

              <table id="email" width="600px" cellspacing="0" style="font-family:arial">
                <tr>
                    <td style="background-color: #EBEBEB;padding-top: 10px;padding-bottom: 10px;">
                        <b>Nome: '.$nome.'</b>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 10px;padding-bottom: 10px;">
                        Sobrenome: '.$sobrenome.'
                    </td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding-top: 10px;padding-bottom: 10px;">
                        <b>Empresa: '.$empresa.'</b>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 10px;padding-bottom: 10px;">
                        Cargo: '.$cargo.'
                    </td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding-top: 10px;padding-bottom: 10px;">
                        Departamento: '.$departamento.'
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 10px;padding-bottom: 10px;">
                        Telefone Comercial: '.$telefoneCom.'
                    </td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding-top: 10px;padding-bottom: 10px;">
                        <b>Email: '.$email.'</b>
                    </td>
                </tr>
            </table><br><br>

            <h2 style="padding-left:220px;;font-family: arial">Questionário</h2>

            <table width="600px" border="0" cellspacing="0">
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">1-Quais soluções Netglobe você possui? Selecione todas que se aplicam.</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$resposta1.'</td>
                </tr>
                <tr >
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">2 - Quais áreas da empresa utilizam as soluções da NetGlobe?</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$resposta2.'</td>
                </tr>
                <tr >
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">3 - Quantas localidades e usuários estão interligados através do projeto?</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$resposta3.'</td>
                </tr>
                <tr >
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">4 - Quais as necessidades que levaram sua empresa a adotar as soluções da NetGlobe?</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$resposta4.'</td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">5 - Por que a sua empresa optou pelas soluções da NetGlobe? Especifique quais foram os principais fatores decisivos, sendo possível selecionar mais de uma opção:</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$resposta5.'</td>
                </tr>
                <tr >
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">6 - O projeto englobou a integração com outras plataformas?</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$resposta6.'</td>
                </tr>
                <tr >
                    <td></td>
                </tr>
                 <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">7 - Com qual finalidade a vídeo colaboração é utilizada? Selecione todas que se aplicam.</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$resposta7.'</td>
                </tr>
                <tr >
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">8 - Quais os resultados obtidos após a implementação do projeto?</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$resposta8.'</td>
                </tr>
                <tr >
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">9 - A empresa mensura os resultados obtidos com o projeto?</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$resposta9.'</td>
                </tr>
                <tr >
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">10 - Em resumo qual o impacto que o projeto teve em sua organização? Comente os principais destaques.</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$resposta10.'</td>
                </tr>
            </table>

                
  </body>
</html>
		');

		//remetente
		$emailsender = 'site@netglobe.com.br';
		
	/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */
		if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
		elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
		else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");
		
		/* Montando o cabeçalho da mensagem */
		$headers = "MIME-Version: 1.1".$quebra_linha.
		"Content-type: text/html; charset=iso-8859-1".$quebra_linha .
		"From: ".$emailsender.$quebra_linha.
		"Reply-To: ".$emailsender.$quebra_linha;
		// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
		
		/* Enviando a mensagem */
		//Verificando qual é o MTA que está instalado no servidor e efetuamos o ajuste colocando o paramentro -r caso seja Postfix
		if(!mail($email_destino, '[Contato] - '.$nome, $message, $headers ,"-r".$emailsender)){ // Se for Postfix
			$headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
		mail($email_destino, $assunto, $menssage, $headers);
		//$str_msg = 'Sua mensagem foi enviada com sucesso!'; 
		//echo $str_msg;
		}

?>