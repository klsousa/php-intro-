<?php

function validaNome(string $nome): bool{

    if(empty($nome)){
        setarMensagemErro("O nome não pode ser vazio");
        return false;
    }

    else if(strlen($nome) < 3){ //strlen retorna o tamanho da string
         setarMensagemErro("O nome deve ter pelo menos 3 caracteres");
            return false;
    }
    else if(strlen($nome) > 40){  
        setarMensagemErro("O campo nome deve ter no máximo 40 caracteres");
        return false;
    }
    
}
    return true;
}
function validaIdade(string $idade) : bool{

    if(!is_numeric($idade)){ // is_numeric verifica se é um número
            setarMensagemErro("A idade deve ser um número");
            return false;
    }   
    return true;
}     
?>