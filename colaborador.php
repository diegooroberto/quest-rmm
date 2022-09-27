<?php 

$perguntas = array(
                '1-) Periodicamente me avalia e comunica meu desempenho',
                '2-) É respeitoso e claro na aplicação de feedback',
                '3-) Aceita novas ideias',
                '4-) Comunica a equipe sobre as decisões do escritório',
                '5-) Estabelece claramente metas e objetivos',
                '6-) Dedica tempo à equipe (através de reuniões/conversas individuais)',
                '7-) No home office, se faz sempre presente',
                '8-) Sempre está disponível',
                '9-) É coerente entre o que diz e pratica',
                '10-) Me inspira',
                '11-) Vê o erro como oportunidade de aprendizado',
                '12-) Me incentiva a aprender e impulsiona a minha carreira',
                '13-) Promove o desenvolvimento da equipe',
                '14-) Me dá autonomia de participar de decisões',
                '15-) Me transmite confiança em pedir feedback ou desabafar',
                '16-) Age com calma em momentos de pressão',
                '17-) Tem empatia pela equipe',
                '18-) Promove um ambiente agradável de trabalho',
                '19-) Me dá liberdade para expressar minhas opiniões'
            );

$gestoreslista = array(
                    'Aline Bayer da Silva', 
                    'Carla de Jesus Ferreira',
                    'Danielle Nascimento Bredariol Campos', 
                    'Fernando Moromizato Junior', 
                    'Gustavo Porchat de Assis Liberato', 
                    'Jose Carlos Higa de Freitas', 
                    'Juarez Camargo de Almeida Prado Filho', 
                    'Lucas Renio da Silva', 
                    'Lucas Testini de Mello Miller', 
                    'Marcel Nicolau Stivaletti', 
                    'Rafael Silva Ferreira', 
                    'Rodrigo de Oliveira Alonso', 
                    'Thiago Testini de Mello Miller'
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

            <b> ------> Selecione seu gestor: </b><select name="meugestor" id="meugestor">
            <?php
                foreach ($gestoreslista as $gestor) {
            ?>
                    <option value="<?php echo $gestor; ?>"> <?php echo $gestor; ?> </option>
            <?php
                }
            ?>
                </select><br><br>
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

            <b> ------> Empregador: </b><select name="meugestor" id="meugestor"><option value="Lucas Testini de Mello Miller"> Lucas Testini de Mello Miller </option></select><br><br>

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