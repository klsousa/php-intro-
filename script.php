<?php

session_start();
 
$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'adolescente';
$categoria[] = 'adulto';
$categoria[] = 'idoso';


$nome = $_POST["nome"]; 
$idade = $_POST["idade"];

if(empty($nome) || empty($idade)){ // empty verifica se o campo está vazio
    $_SESSION["mensagem de erro"] = "Preencha todos os campos";
    header("Location: index.php");
    return;
}
else if(strlen($nome) < 3){ //strlen retorna o tamanho da string
    $_SESSION["mensagem de erro"] = "O nome deve ter pelo menos 3 caracteres";
    header("Location: index.php");
    return;
}
else if(strlen($nome) > 40){ 
    $_SESSION["mensagem de erro"] = "O nome deve ter no máximo 40 caracteres";
    header("Location: index.php");
    return;
}
else if(!is_numeric($idade)){ // is_numeric verifica se é um número
    $_SESSION["mensagem de erro"] = "A idade deve ser um número";
    header("Location: index.php");
    return;
}
if($idade >= 6 && $idade <= 12){
    
    for($i = 0; $i <= count($categoria); $i++)
        {
            if($categoria[$i] == 'infantil')
             $_SESSION["mensagem de erro"] = " O nadador " .$nome. " compete na categoria " .$categoria[$i]. "<br>";
             header("Location: index.php");
        }
}
else if($idade >= 13 && $idade <= 18){

    for($i = 0; $i <= count($categoria); $i++)
        {
            if($categoria[$i] == 'adolescente')
                $_SESSION["mensagem de sucesso"] = " O nadador " .$nome. " compete na categoria " .$categoria[$i]. "<br>";
                header("Location: index.php");
        }

}else if($idade >= 19 && $idade <= 59){

    for($i = 0; $i <= count($categoria); $i++)
        {
            if($categoria[$i] == 'adulto')
                $_SESSION["mensagem de sucesso"] = " O nadador " .$nome. " compete na categoria " .$categoria[$i]. "<br>";
                header("Location: index.php");
        }
} else if($idade >= 60){

    for($i = 0; $i <= count($categoria); $i++)
        {
            if($categoria[$i] == 'idoso')
                $_SESSION["mensagem de sucesso"] = " O nadador " .$nome. " compete na categoria " .$categoria[$i]. "<br>";
                header("Location: index.php");
        }
      
} else {
    $_SESSION["mensagem de sucesso"] = " O nadador " .$nome. " não compete na competição";
    header("Location: index.php");
}



?>
