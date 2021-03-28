<?php



$categoria =[];

$categoria[] = 'infantil';
$categoria[] = 'adolecente';
$categoria[] = 'adulto';





$name = $_POST['name'];//pega as informações do post
$age = $_POST['age'];

//echo $name;
//echo $age;


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