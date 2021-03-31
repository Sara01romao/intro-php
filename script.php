<?php

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
  echo 'Informe o nome';
  return;
}//empty: verifica se o campo não está vazio


if(strlen($name)<3){
  echo 'O nome deve ter mais de 3 caracteres';
  return;
}//stelen: conta a quantidade de caracter que a string tem 

if(strlen($name)>10){
  echo 'Nome é muito extenso';
  return;
}//controla a quantidade de caracteres da string


if(!is_numeric($age)){

  echo 'Infome o numero da idade';
  return;

}//verifica se não é um numero


if($age >= 6 && $age <=12){
  for($i = 0; $i <= count($categoria); $i++){
    if($categoria[$i] == 'infantil'){
      echo "O nadador ".$name." compete na categoria ".$categoria[$i];
    }
  }
}else if($age >= 13 && $age <=16){
  for($i = 0; $i <= count($categoria); $i++){
    if($categoria[$i] == 'adolecente'){
      echo "O nadador ".$name." compete na categoria ".$categoria[$i];
    }
  }
}else{
  for($i = 0; $i <= count($categoria); $i++){
    if($categoria[$i] == 'adulto'){
      echo "O nadador ".$name." compete na categoria ".$categoria[$i];
    }
  }
}

?>