﻿<?php
  $serverName = 'localhost';
  $connectionInfo = array("Database"=>"MILCOPIAS", "UID"=>"sa", "PWD"=>"Georgiane13@", "CharacterSet"=>"UTF-8");
  $conn = sqlsrv_connect($serverName, $connectionInfo);
  
  if($conn){
    echo "";
  }else{
    echo "falha na conex�o";
    die( print_r(sqlsrv_errors(), true));
  }

?> 