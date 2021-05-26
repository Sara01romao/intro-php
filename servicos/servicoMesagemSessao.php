<?php>

session_start()

//função para msg de SUCESSO
function setarMensagemErro(string $mensagem) : void{
  $_SESSION ['mensagem-de-sucesso'] = $mensagem;
}

//função para resgatar a msg 
function  obterMensagemErro(): ?string{
  if(isset($_SESSION['mensagem-de-sucesso']))
      return $_SESSION['mensagem-de-sucesso'];
  
  return null;
}



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


// remover msg de erro
function obterMensagemErro() : void{
  if(isset($_SESSION['mensagem-de-erro']))
       $_SESSION['mensagem-de-erro'];
}


// remover msg de Sucesso
function obterMensagemSucesso() : void{
  if(isset($_SESSION['mensagem-de-sucesso']))
      unset($_SESSION['mensagem-de-sucesso']);
}


?>