<?php

session_start();//inicia a sessão, deve vir sempre antes 
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<p>FORMULÁRIO PARA iNSCRIÇÃO DE COMPETIDORES</p>

  <form action="script.php" method="post">

      <?php 

          $msgDeSucesso = isset($_SESSION['msg-de-sucesso']) ? $_SESSION['msg-de-sucesso'] : '';
          if(!empty($msgDeSucesso)){
            echo $msgDeSucesso;
          };//verifica se a variavel foi inicializada msg de sucesso

          

          $msgDeErro = isset($_SESSION['msg-de-erro']) ? $_SESSION['msg-de-erro'] : '';
          if(!empty($msgDeErro)){
            echo $msgDeErro;
          }; //verifica se a variavel foi inicializada msg de erro
      ?>

      <label for="">Your name: </label>
      <input type="text" name='name'>
      <br>

      <label for="">Your age: </label>
      <input type="text" name='age'>
      <br>

      <input type="submit" value="Enviar dados">



  </form>
</body>
</html>