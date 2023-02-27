<?php 
	
	session_start();

	//remover indices do array de seção
	//unset()

	//destruir a variavel de sessao
	session_destroy();
	header('Location: index.php');

?>