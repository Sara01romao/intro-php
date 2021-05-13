<?php>

session_start()

//função para msg de erros 
function setarMensagemErro(string $mensagem) : void{
  $_SESSION ['mensagem-de-erro'] = $mensagem;
}

//função para resgatar a msg 
function  obterMensagemErro(): ?string{
  if(isset($_SESSION['mensagem-de-erro']))
      return $_SESSION['mensagem-de-erro'];
  
  return null;
}

//?string: pode retornar uma string um um null

?>