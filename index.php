<?php
  require_once("connection.php");
  $conn = connect();  
  if ($conn->connect_error) {
    die("Conexão não estabelecida: " . $conn->connect_error) . '<br>';
  }
  else {
    //echo "Conectado!<br>---------------<br><br>";
  }
  $sql = 'select * from CADASTRO';
  $res = $conn->query($sql);
  if (!$res) {
    throw new Exception("Database Error [{$conn->errno}] {$conn->error}");
  }
  else {
    if($row = mysqli_fetch_row($res)) {
      echo '<p>' . $row[0] . '</p>';
    }
  }
?>


<!DOCTYPE html>
<html>
<body>

<h1>Curso de Programação para Marketing</h1>
<h2>Turma 2018-1 </h2>
<br>
<h3>Lista de Índices</h3>
<a href='/Turma20181/jean/index.php'>Jean Carlos Racoski</a>

</body>
</html>
