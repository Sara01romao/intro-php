
<?php>


//função para validar nome passado por paremetro

function validaNome(string $nome): boot{
  if(empty($name)){
    $_SESSION['msg-de-erro']= 'Informe o nome';//array associativo, no caso a msg de erro
  //  header('Location: index.php');//voltar para index
  
   return false;
  }//empty: verifica se o campo não está vazio
  
  
  else if(strlen($name)<3){
    $_SESSION['msg-de-erro']= 'O nome deve ter mais de 3 caracteres';
    // header('Location: index.php');
    return false;
  }//stelen: conta a quantidade de caracter que a string tem 
  
  else if(strlen($name)>10){
    
    $_SESSION['msg-de-erro']= 'Nome é muito extenso';
    // header('Location: index.php');
    return false;
  }//controla a quantidade de caracteres da string
  
  return true;
}

//validar idade

function validaIdade(string $idade){
  else if(!is_numeric($age)){

    /* echo 'Infome o numero da idade';
     return;*/
   
     $_SESSION['msg-de-erro']= 'Infome o numero da idade';//array associativo, no caso a msg de erro
    header('Location: index.php');
   return;
   
   
   }//verifica se não é um numero
   
   
   if($age >= 6 && $age <=12){
     for($i = 0; $i <= count($categoria); $i++){
       if($categoria[$i] == 'infantil'){
        
         $_SESSION['msg-de-sucesso']= "O nadador ".$name." compete na categoria ".$categoria[$i];
         header('Location: index.php');
         return;
       }
     }
   }else if($age >= 13 && $age <=16){
     for($i = 0; $i <= count($categoria); $i++){
       if($categoria[$i] == 'adolecente'){
   
         $_SESSION['msg-de-sucesso']= "O nadador ".$name." compete na categoria ".$categoria[$i];
         header('Location: index.php');
         return;
       }
     }
   }else{
     for($i = 0; $i <= count($categoria); $i++){
       if($categoria[$i] == 'adulto'){
         
         $_SESSION['msg-de-sucesso']= "O nadador ".$name." compete na categoria ".$categoria[$i];
         header('Location: index.php');
         return;
       }
     }
   }
}
?>