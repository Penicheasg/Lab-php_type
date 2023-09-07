<?php
  // PHP TYPE JUGGLING 
  // php 7.4 << 
  function verificarBancoDeDados(){
    echo "Validando login de usuário comum!";
  }
  $isAdmin = false; 
  
  $user = 0;
  $password = 0;
  
  if($user == "Admin" and  $password == "Admin#2023"){
    $isAdmin = true; 
    if($isAdmin == true){
      echo "Redirecionando para a página do admin...";
      <h1> hackeado..</h1>
    }
  }else{
    verificarBancoDeDados();
  }
  
?>
