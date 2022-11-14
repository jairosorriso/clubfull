<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php  echo $title; ?></title>
	<link type="text/css" rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
	  
     <div id="header">
     	
     	<?php require 'partials/header.php'; ?>
     </div>

	  <div class="container">
	  	<?php require VIEWS.$view; ?>
	  </div>
</body>
</html>