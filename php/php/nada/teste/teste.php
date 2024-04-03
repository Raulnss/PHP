<?php
try {
  require('conecta.php');

  $stmt = $conn->prepare("SELECT * FROM tb_usuario WHERE ds_email = :email");

  $stmt->bindValue(":email", $_POST['email']);
  $stmt->execute();
  $consulta = $stmt->fetch(PDO::FETCH_ASSOC);

  if($consulta){
    
    echo "EMAIL EM USO";

  }else{

     $cadastro = $conn->prepare('INSERT INTO tb_usuario(nm_nome_completo,nm_usuario,ds_email,ds_senha) VALUES(:nomecompleto,:nmusuario,:email,:senha)');

      $cadastro ->execute(array(

      ':nomecompleto' => $_POST['nmcompleto'],
      ':nmusuario' => $_POST['usuario'],
      ':email' => $_POST['email'],
      ':senha' => $_POST['senha']
    ));

    // echo "<meta HTTP-EQUIV='refresh' CONTENT='0; nada.html'>";
    echo "deu certo!";
 }
}catch(PDOException $e){ 
	echo 'Error: ' . $e->getMessage();
}
?>