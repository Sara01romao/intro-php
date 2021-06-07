<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string{
  $categoria =[];
  $categoria[] = 'infantil';
  $categoria[] = 'adolecente';
  $categoria[] = 'adulto';
  
//se os dados forem validados
  if(validaNome($nome) && validaIdade($idade)){
    
  if($age >= 6 && $age <=12){
    for($i = 0; $i <= count($categoria); $i++){
      if($categoria[$i] == 'infantil'){
      
       setarMensagemSucesso{ mensagem: "O nadador ".$name." compete na categoria ".$categoria[$i]};
        
        return null;
      }
    }
  }else if($age >= 13 && $age <=16){
    for($i = 0; $i <= count($categoria); $i++){
      if($categoria[$i] == 'adolecente'){

       setarMensagemSucesso{ mensagem: "O nadador ".$name." compete na categoria ".$categoria[$i]};
        
        return null;
      }
    }
  }else{
    for($i = 0; $i <= count($categoria); $i++){
      if($categoria[$i] == 'adulto'){
        
       setarMensagemSucesso{ mensagem: "O nadador ".$name." compete na categoria ".$categoria[$i]};
        
        return null;
      }
    }
  }

  }
  else{
    return ObterMensagemErro();
  }




}

?>
