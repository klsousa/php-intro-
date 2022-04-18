<?php

declare(strict_types=1);
function validaNome(string $nome): bool{
    if(empty($nome)){ // empty verifica se o valor é vazio
         $_SESSION[" mensagem de erro "] = " O campo nome não pode estar vazio ";
            return false;
    }
    else if(strlen($nome) < 3){ //strlen retorna o tamanho da string
         $_SESSION[" mensagem de erro "] = " O campo nome deve ter pelo menos 3 caracteres ";
             return false;
    }
    else if(strlen($nome) > 40){  
         $_SESSION[" mensagem de erro "] = " Nome muito longo ";
            return false;
}
    return true;
}

function validaIdade(string $idade) : bool{

    if(!is_numeric($idade)){ // is_numeric verifica se é um número
            $_SESSION[" mensagem de erro "] = " O campo idade deve ser um número ";
            return false;
    }   
    return true;
}     
?>