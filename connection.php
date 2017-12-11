<?php 

  function connect() {
    $server;
    $username;
    $password; 
    $db;
    global $isDeploy;
    
    $server = 'sql10.freesqldatabase.com';
    $username = 'sql10210376';                                     
    $password = 'wAWI2eDA1H';
    $db = 'sql10210376';                                        
    
    return new mysqli($server, $username, $password, $db);
  }

?> 