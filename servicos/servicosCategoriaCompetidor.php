<?php
function defineCategoriaCompetidor(string $nome , string $idade) : ?string{
    $categoria = [];
    $categoria[] = 'infantil';
    $categoria[] = 'adolescente';
    $categoria[] = 'adulto';
    $categoria[] = 'idoso';
    if(validaNome($nome) && validaIdade($idade))
    {
          if($idade >= 6 && $idade <= 12){
    
        for($i = 0; $i <= count($categoria); $i++)
            {
                if($categoria[$i] == 'infantil')
                 setarMensagemSucesso(" O nadador" .$nome. " compete na categoria " . $categoria[$i]);
                 return null;
            }
    }
    else if($idade >= 13 && $idade <= 18){
    
        for($i = 0; $i <= count($categoria); $i++)
            {
                if($categoria[$i] == 'adolescente')
                    setarMensagemSucesso(" O nadador" .$nome. " compete na categoria " . $categoria[$i]);
                    return null;
            }
    
    }else if($idade >= 19 && $idade <= 59){
    
        for($i = 0; $i <= count($categoria); $i++)
            {
                if($categoria[$i] == 'adulto')
                    setarMensagemSucesso(" O nadador" .$nome. " compete na categoria " . $categoria[$i]);
                    return null;
            }
    } else if($idade >= 60){
    
        for($i = 0; $i <= count($categoria); $i++)
            {
                if($categoria[$i] == 'idoso')
                    setarMensagemSucesso(" O nadador" .$nome. " compete na categoria " . $categoria[$i]);
                    return null;
            }
          
    } else {
        setarMensagemErro("O nadador" . $nome . " não compete");
        return;
    }
    }
    else
    {
        return obterMensagemErro();
    }

}

?>