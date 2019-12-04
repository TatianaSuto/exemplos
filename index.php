<?php

// Definir o meu array associativo $pessoa1;
$pessoas = [
	[
    "nome" => "Elizabete Moura",
    "idade" => 48,
    "feminino" => true,
	],
	[
    "nome" => "Gabrinne Oliveira",
    "idade" => 20,
    "feminino" => true,
	],
	[
    "nome" => "Ricardo Narciso",
    "idade" => 27,
		"feminino" => false,
	]
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<?php foreach ($pessoas as $pos=>$pessoa) { ?>
	<div class="pessoa">
		<img src="./img/foto<?=pos?>.jpg" alt="<?=$pessoa['nome'];?>">
		<div class="dados">
			<div class="info">
				<span>Nome:</span>
				<div><?=$pessoa['nome'];?></div>
			</div>
			<div class="info">
				<span>Idade:</span>
				<div><?=$pessoa['idade'];?></div>
			</div>
			<div class="info">
				<span>Sexo:</span>
				<div>
	
					<?php
						// if ($pessoa1['feminino']) {
						//     echo ("Feminino");
						// } else {
						//     echo ("Masculino");
						// }
					?>

					<?= $pessoa['feminino'] ? 'Feminino' : 'Masculino' ?>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</body>
</html>
