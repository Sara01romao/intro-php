<?php

session_start();


$categoria =[];
$categoria[] = 'infantil';
$categoria[] = 'adolecente';
$categoria[] = 'adulto';





$name = $_POST['name'];//pega as informações do post
$age = $_POST['age'];

//echo $name;
//echo $age;


//Validação de dados. 

if(empty($name)){
  $_SESSION['msg-de-erro']= 'Informe o nome';//array associativo, no caso a msg de erro
 header('Location: index.php');//voltar para index

 return;
}//empty: verifica se o campo não está vazio


else if(strlen($name)<3){
  $_SESSION['msg-de-erro']= 'O nome deve ter mais de 3 caracteres';
  header('Location: index.php');
  return;
}//stelen: conta a quantidade de caracter que a string tem 

else if(strlen($name)>10){
  
  $_SESSION['msg-de-erro']= 'Nome é muito extenso';
  header('Location: index.php');
  return;
}//controla a quantidade de caracteres da string


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

?>