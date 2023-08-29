<html>
  <body>
    <form action="dados.php" method="POST">
      Nome: <input type="text" name="nome">
      <br>
      Email: <input type="email" name="email">
      <br>
      <input type="submit" name="enviar">
      
  </body>
</html>

<?php
$nome = $_POST['nome'];
$email = $_POST['email];

  echo "Seu nome é $nome e seu email é $email."

?>
