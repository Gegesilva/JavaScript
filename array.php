<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       include_once 'conexaoSQL.php';
       $sql = "SELECT TOP 10 TB01066_USUARIO Usuario FROM TB01066";
       $result_usuario = sqlsrv_query($conn, $sql);

       if($result_usuario === false)
    {
      die (print_r(sqlsrv_errors(), true));
    }
      $sla = "";
      while ($row = sqlsrv_fetch_array($result_usuario, SQLSRV_FETCH_ASSOC))
      {
        $nome .= $row['Usuario'];
      }

      echo "<h1>$nome<h1>";
    ?>
</body>
</html>