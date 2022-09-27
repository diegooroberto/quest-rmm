<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$informacoes = "";
$respostas = "";

$Object = new DateTime();  
$Object->setTimezone(new DateTimeZone ('America/Sao_Paulo'));
$DateAndTime = $Object->format("d/m/Y h:i:s");

$perguntas = array(
        'Periodicamente me avalia e comunica meu desempenho',
        'É respeitoso e claro na aplicação de feedback',
        'Aceita novas ideias'
        // 'Comunica a equipe sobre as decisões do escritório',
        // 'Estabelece claramente metas e objetivos',
        // 'Dedica tempo à equipe (através de reuniões/conversas individuais)',
        // 'No home office, se faz sempre presente',
        // 'Sempre está disponível',
        // 'É coerente entre o que diz e pratica',
        // 'Me inspira',
        // 'Vê o erro como oportunidade de aprendizado',
        // 'Me incentiva a aprender e impulsiona a minha carreira',
        // 'Promove o desenvolvimento da equipe',
        // 'Me dá autonomia de participar de decisões',
        // 'Me transmite confiança em pedir feedback ou desabafar',
        // 'Age com calma em momentos de pressão',
        // 'Tem empatia pela equipe',
        // 'Promove um ambiente agradável de trabalho',
        // 'Me dá liberdade para expressar minhas opiniões'
    );

$mail = new PHPMailer(true);

try {
    $respostas = "{$_POST['meugestor']} <br>";
    for ($x = 0; $x < count($perguntas); $x++) {
        $respostas .= "<b> $perguntas[$x] </b><br> {$_POST['r'.$x]} <br><br>";
    }

    $respostas .= "{$_POST['2meugestor']} <br>";
    for ($i = 0; $i < count($perguntas); $i++) {
        $respostas .= "<b> $perguntas[$i] </b><br> {$_POST['2r'.$i]} <br><br>";
    }

    $respostas .= "<b> OUTRAS INFORMAÇÕES: </b><br> {$_POST['informacoes']}";
    
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'enviormm@gmail.com';
    $mail->Password = 'drwhsooulhsjdbgk';

    $mail->setFrom('enviormm@gmail.com', 'Envio RMM');
    $mail->addAddress('diegorosa@miller.adv.br', 'Diego TI');
    $mail->addReplyTo('enviormm@gmail.com', 'Envio RMM');

    $mail->isHTML(true);
    $mail->Subject = 'Questionario RMM <'. $DateAndTime . '>';
    $mail->Body = $respostas;
    
    $mail->send();
    $msg = 'Respostas enviadas, muito obrigado!';
} catch (Exception $e) {
    $msg = 'Desculpe, algo deu errado ou você está sem internet. Por favor, tente novamente! Erro: {$mail->ErrorInfo}';
}  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questionário RMM</title>
</head>
<body>
    <?php if (!empty($msg)) {
        echo "<h2><font color='red'>$msg</font></h2>";
    } ?>
</body>
</html>