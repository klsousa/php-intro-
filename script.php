<?php
$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'adolescente';
$categoria[] = 'adulto';
$categoria[] = 'idoso';


$nome = $_POST["nome"]; 
$idade = $_POST["idade"];

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
} else {
    for($i = 0; $i <= count($categoria); $i++)

        {
            if($categoria[$i] == 'idoso')
                echo " O nadador " .$nome. " compete na categoria " .$categoria[$i]. "<br>";
        }
}                 

?>
