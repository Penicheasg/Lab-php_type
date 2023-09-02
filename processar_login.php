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
    }
  }else{
    verificarBancoDeDados();
  }
  
?>


<?php
  // PHP TYPE JUGGLING 
  // php 7.4 << 

   
    function pegarToken(){
      
       $token = 0;
      $user = "Guilherme";
      $nova_senha = "PenicheManeiro";
      
      
     echo "Buscando na api\n";
     $tokenValido = "abc1234";
     echo "Token buscado!";
     
     if($token == $tokenValido){
     echo "\nSolicitação aprovada!";
   }
   }
   
   pegarToken();
  
?>
