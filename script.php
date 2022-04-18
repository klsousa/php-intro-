<?php

include "servicos/servicosMensagemSessao.php";
include "servicos/servicoSValidacao.php";
include "servicos/servicosCategoriaCompetidor.php";


$nome = $_POST['nome']; 
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header (string: 'Location: index.php');
?>
