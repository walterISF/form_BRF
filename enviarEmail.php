<?php 

	$questao1 = $_GET['questao1'];
	$questao2 = $_GET['questao2'];
	$questao3 = $_GET['questao3'];
	$questao4 = $_GET['questao4'];
	$questao51 = $_GET['questao51'];
    $questao52 = $_GET['questao52'];
    $questao53 = $_GET['questao53'];
    $questao54 = $_GET['questao54'];
    $questao55 = $_GET['questao55'];
    $questao56 = $_GET['questao56'];
    $questao57 = $_GET['questao57'];
    $questao61 = $_GET['questao61'];
    $questao62 = $_GET['questao62'];
    $questao63 = $_GET['questao63'];
    $questao64 = $_GET['questao64'];
    $questao65 = $_GET['questao65'];
    $questao66 = $_GET['questao66'];
    $questao67 = $_GET['questao67'];
    $questao71 = $_GET['questao71'];
    $questao72 = $_GET['questao72'];
    $questao73 = $_GET['questao73'];
    $questao74 = $_GET['questao74'];
    $questao75 = $_GET['questao75'];
    $questao76 = $_GET['questao76'];
    $questao77 = $_GET['questao77'];
	$questao8 = $_GET['questao8'];
	$questao9 = $_GET['questao9'];
	$questao10 = $_GET['questao10'];
    $questao11 = $_GET['questao11'];

	$assunto = 'Questionário BRF';

	//$email_destino = 'Web e Ponto <contato@webeponto.com.br>';

	$conteudo  = '
		<!doctype html>
<html>
<head>
<meta charset="utf-8" />
</head>

<body>

            <h2 style="padding-left:220px;;font-family: arial">Questionário</h2>

            <table width="600px" border="0" cellspacing="0">
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">1 - Quando foi a última vez que você entrou em contato com nosso suporte (vNOC e/ou Concierge)?</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$questao1.'</td>
                </tr>
                <tr >
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">2 - Como você entrou em contato com nossos consultores técnicos?</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$questao2.'</td>
                </tr>
                <tr >
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">3 - Qual foi o principal motivo de contato com nosso time de suporte técnico?</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$questao3.'</td>
                </tr>
                <tr >
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">4 - Já teve problemas com nosso time de suporte técnico? Se sim, qual?</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$questao4.'</td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">5 - Com base em sua experiência, por favor, avalie a sua satisfação com nossos residentes:</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Solução do problema : '.$questao51.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Qualidade do conselho : '.$questao52.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Prontidão de atendimento do telefone : '.$questao53.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Profissionalismo do agente : '.$questao54.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Assistência do agente : '.$questao55.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Facilidade de contatar o suporte : '.$questao56.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Prontidão de resposta do e-mail : '.$questao57.'</td>
                </tr>
                <tr >
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">6 - Com base em sua experiência, por favor, avalie a sua satisfação com nosso time de Concierge:</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Solução do problema : '.$questao61.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Qualidade do conselho : '.$questao62.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Prontidão de atendimento do telefone : '.$questao63.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Profissionalismo do agente : '.$questao64.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Assistência do agente : '.$questao65.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Facilidade de contatar o suporte : '.$questao66.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Prontidão de resposta do e-mail : '.$questao67.'</td>
                <tr >
                    <td></td>
                </tr>
                 <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">7 - Com base em sua experiência, por favor, avalie a sua satisfação com nosso time vNOC:</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Solução do problema : '.$questao71.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Qualidade do conselho : '.$questao72.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Prontidão de atendimento do telefone : '.$questao73.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Profissionalismo do agente : '.$questao74.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Assistência do agente : '.$questao75.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Facilidade de contatar o suporte : '.$questao76.'</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">Prontidão de resposta do e-mail : '.$questao77.'</td>
                <tr >
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">8 - Quão responsiva é a nossa empresa quando você precisa de ajuda / suporte?</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$questao8.'</td>
                </tr>
                <tr >
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">9 - Com que frequência você costuma entrar em contato com o suporte ao cliente?</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$questao9.'</td>
                </tr>
                <tr >
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">10 - Por favor, avalie sua satisfação geral com o nosso time de suporte ao cliente.</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$questao10.'</td>
                </tr>
                <tr >
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color: #EBEBEB;padding: 7px;font-family: arial;">10 - Por favor, deixe seu comentário sobre a sua experiência ou sugestões sobre como podemos melhorar?</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;padding-bottom: 30px;">'.$questao11.'</td>
                </tr>
            </table>

                
  </body>
</html>
		';

   date_default_timezone_set('America/Sao_Paulo');

    //destinatario
    $email_destino = 'isabela.cavalcanti@netglobe.com.br';
     //remetente


     $emailsender = 'atendimento@vnoc.com.br';
     include("../phpmailer/class.phpmailer.php");
        //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

        $mail             = new PHPMailer();

        $mail->CharSet = "UTF-8"; 
        $mail->IsSMTP();
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mail->Port       = 587;                   // set the SMTP port for the GMAIL server

        $mail->Username   = "noreply@vnoc.com.br";  // GMAIL username
        $mail->Password   = "vnoc@vnoc2";            // GMAIL password

        $mail->AddReplyTo("noreply@vnoc.com.br","NO REPLY");

        $mail->From       = "noreply@vnoc.com.br";
        $mail->FromName   = "NetGlobe Video Cloud";
      //$mail->AddCC($cc, $cc);
      //$mail->AddBCC($cco, $cco);

        $mail->Subject    = $assunto;

        //$mail->Body       = "Hi,<br>This is the HTML BODY<br>";                      //HTML Body
        //$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        $mail->WordWrap   = 50; // set word wrap

        $mail->MsgHTML($conteudo);

        $mail->AddAddress($email_destino);

        $mail->IsHTML(true); // send as HTML


        if(!$mail->Send()) {
          $str_msg = 'Infelizmente ocorreu um erro em nossos servidores, por favor tente mais tarde. ->' . $mail->ErrorInfo;
        } else {
          $str_msg = 'Sua mensagem foi enviada com sucesso!';
          echo json_encode('email enviado');
        }

?>