<?php 

$teste = "";
$perguntas = array(
                'Periodicamente me avalia e comunica meu desempenho',
                'É respeitoso e claro na aplicação de feedback',
                'Aceita novas ideias',
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
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css" class="css">
    <title>Questionário RMM</title>
</head>
<body>
<div id="container">
    <div class="box">
        <h1>[Questionário] - Avaliação de Líder e Empregador</h1>
        <p> O presente questionário consiste em avaliar a liderança do Escritório de Advocacia Ruy de Mello Miller, colhendo de forma anônima, informações de seus colaboradores.</p><br>

        <form action="envio.php" method="POST" name="form">
            <label for="email"><input type="hidden" name="email" id="email" value="enviormm@gmail.com"></label>
            <label for="name"><input type="hidden" name="name" id="name" value="Envio RMM"></label>

            <b> ------> Empregador: </b><select name="meugestor" id="meugestor"><option value="Thiago Testini de Mello Miller"> Thiago Testini de Mello Miller </option></select><br><br>

            <?php
                for ($x = 0; $x < count($perguntas); $x++) {
            ?>
                    <label for="p<?php echo $x; ?>"><?php echo $perguntas[$x]; ?><br>
                    <input type="radio" name="r<?php echo $x; ?>" id="r<?php echo $x; ?>" value="DT" required="required">Discordo totalmente</label>
                    <input type="radio" name="r<?php echo $x; ?>" id="r<?php echo $x; ?>" value="D">Discordo</label>
                    <input type="radio" name="r<?php echo $x; ?>" id="r<?php echo $x; ?>" value="NEUTRO">Nem discordo/Nem concordo</label>
                    <input type="radio" name="r<?php echo $x; ?>" id="r<?php echo $x; ?>" value="C">Concordo</label>
                    <input type="radio" name="r<?php echo $x; ?>" id="r<?php echo $x; ?>" value="CT">Concordo plenamente</label><br><br>
            <?php
                }
            ?>

            <hr><br><br>

            <b> ------> Empregador: </b><select name="2meugestor" id="2meugestor"><option value="Lucas Testini de Mello Miller"> Lucas Testini de Mello Miller </option></select><br><br>

            <?php
                for ($i = 0; $i < count($perguntas); $i++) {
            ?>
                    <label for="2p<?php echo $i; ?>"><?php echo $perguntas[$i]; ?><br>
                    <input type="radio" name="2r<?php echo $i; ?>" id="2r<?php echo $i; ?>" value="DT" required="required">Discordo totalmente</label>
                    <input type="radio" name="2r<?php echo $i; ?>" id="2r<?php echo $i; ?>" value="D">Discordo</label>
                    <input type="radio" name="2r<?php echo $i; ?>" id="2r<?php echo $i; ?>" value="NEUTRO">Nem discordo/Nem concordo</label>
                    <input type="radio" name="2r<?php echo $i; ?>" id="2r<?php echo $i; ?>" value="C">Concordo</label>
                    <input type="radio" name="2r<?php echo $i; ?>" id="2r<?php echo $i; ?>" value="CT">Concordo plenamente</label><br><br>
            <?php
                }
            ?>

            <label for="informacoes">Em geral, você está satisfeito com o relacionamento com a sua liderança? <br> Destaque um exemplo positivo e/ou negativo.<br>
            <textarea name="informacoes" id="informacoes" rows="8" cols="95"></textarea></label><br><br>
            <input type="submit" value="Enviar Respostas">
        </form>
    </div>
</div>
</body>
</html>