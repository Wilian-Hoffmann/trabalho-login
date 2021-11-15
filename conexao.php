<?php

define('HOST','127.0.0.1');
define('USUARIO','root');
define('SENHA','');
define('DB','bs_login');

$con = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Erro de conexão com o banco');
?>