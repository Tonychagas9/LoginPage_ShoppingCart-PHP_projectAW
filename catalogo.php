<?php

session_start();
    if(!isset($_SESSION['carrinho'])) {
		$_SESSION['carrinho'] = array();
	}
	if(isset($_GET['comprar'])) {
		$_SESSION['carrinho'][] = $_GET['comprar'];
		header('location:' . $_SERVER['PHP_SELF']. '?' . SID);
		exit();
	}

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Catálogo</title>
    <link href="estilos.css" rel="stylesheet">
</head>

<body>

    <div class="caixa0"> 
        <span id="logo"><img src="logo.png"></span>
    </div>
    <div class="caixa1">
        <h2>CATÁLOGO</h2>
	        <p><a href="carrinho.php" 
			      class="botao">
				  Ver carrinho</a>
			</p>
		<br>

	<?php
	$itens =  array('Dicionario Português', 'Livro de Receita', 'Livro de Colorir', 'Mapa das Estradas de Portugal');
    $precos = array(9.99, 14.99, 10.00, 24.00, 1.99);

	?>
	
	<table>
		<thead>
			<tr>
				<th>Nome do Item</th>
				<th>Preço</th>
			</tr>
		</thead>
		<tbody>

	<?php
	for ($i = 0; $i < count($itens); $i++) {
		echo '<tr>';
        echo '<td>'. $itens[$i]. '</td>';
        echo '<td align = "right">' . number_format($precos[$i],2) . '€</td>'; 
        echo '<td align = "right"> <a href="' . $_SERVER['PHP_SELF']. '?comprar=' . $i .' " class="botao">Comprar</a></td>';
	}	
	?>
		<!----	<tr>
				<td>Dicionário Português</td>
				<td>9.99€</td>
			</tr>
			<tr>
				<td>Livro de Receitas</td>
				<td>14.99€</td>
			</tr>
			<tr>
				<td>Livro para Colorir</td>
				<td>10€</td>
			</tr>
			<tr>
				<td>Mapa das Estradas de Portugal</td>
				<td>24.99€</td>
			</tr> -->
		</tbody>
	</table>
</div>
</body>
</html>