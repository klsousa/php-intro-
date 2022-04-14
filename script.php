<?php
$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'adolescente';
$categoria[] = 'adulto';
$categoria[] = 'idoso';


$nome = $_POST["nome"]; 
$idade = $_POST["idade"];

if(empty($nome) || empty($idade)){ // empty verifica se o campo está vazio
    echo " Preencha todos os campos ";
    return;
}
if(strlen($nome) < 3){ //strlen retorna o tamanho da string
    echo " Nome muito curto ";
    return;
}
if(strlen($nome) > 40){ 
    echo " Nome muito longo ";
    return;
}
if(!is_numeric($idade)){ // is_numeric verifica se é um número
    echo " Idade deve ser numérica ";
    return;
}
if($idade >= 6 && $idade <= 12){
    
    for($i = 0; $i <= count($categoria); $i++)
        {
            if($categoria[$i] == 'infantil')
              echo " O nadador " .$nome. " compete na categoria " .$categoria[$i]. "<br>";
        }
}
else if($idade >= 13 && $idade <= 18){

    for($i = 0; $i <= count($categoria); $i++)
        {
            if($categoria[$i] == 'adolescente')
                echo " O nadador " .$nome. " compete na categoria " .$categoria[$i]. "<br>";
        }

}else if($idade >= 19 && $idade <= 59){

    for($i = 0; $i <= count($categoria); $i++)
        {
            if($categoria[$i] == 'adulto')
                echo " O nadador " .$nome. " compete na categoria " .$categoria[$i]. "<br>";
        }
} else if($idade >= 60){

    for($i = 0; $i <= count($categoria); $i++)
        {
            if($categoria[$i] == 'idoso')
                echo " O nadador " .$nome. " compete na categoria " .$categoria[$i]. "<br>";
        }
      
} else {
    echo " Idade não permitida ";
}



?>
