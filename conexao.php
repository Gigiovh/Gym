<?php
define('HOST', '127.0.0.1');
define('SENHA', $senha);
define('Tipo', $tipo);
define('PCD', $PCD);
define('Email', $email);
define('DB', 'Cadastro');

$conexao = mysqli_connect(HOST,  SENHA,Tipo,PCD,Email, DB) or die ('Não foi possível conectar');