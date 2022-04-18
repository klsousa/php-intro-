<?php
    include "servicos/servicosMensagemSessao.php";
    include "servicos/servicoValidacao.php";
    include "servicos/servicosCategoriaCompetidor.php";
?>    
<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset="UTF-8">
    <meta name = "author" content = "">
    <meta name = "description" content = "">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inscricão</title>
</head>

<body>

    <p> Formulario para inscrição de competidores</p>

    <form action = "script.php" method ="post"> 
        <?php
        $mensagemDeSucesso = obterMensagemSucesso();
        if(!empty($mensagemDeSucesso))
        {
            echo $mensagemDeSucesso;
        }

        $mensagemDeErro = obterMensagemErro();
        if(!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }
        ?>
    <p> Seu nome: <input type = "text" name="nome" /></p>
    <p> Sua idade: <input type = "text" name="idade" /></p>
    <p><input type = "submit" value = "Enviar dados do competidor" /></p>
    
    <p><input type = "reset" value = "Limpar dados" /></p>
</body>
</html>