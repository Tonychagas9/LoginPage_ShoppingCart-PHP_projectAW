<?php

session_start();
    if(!isset($_SESSION['carrinho'])) {
		$_SESSION['carrinho'] = array();
	}
	if(isset($_GET['vazio'])) {
		unset($_SESSION['carrinho']);
        header('location:' . $_SERVER['PHP_SELF'] . '?' . SID);
        exit();
	}

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Catálogo - Prática 29</title>
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
    $precos = array(9.99, 14.99, 10.00, 24.00, 1.99)
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
	
        $total = 0;
        for ($i = 0; $i < count($_SESSION['carrinho']); $i++) {
            echo '<tr>';
            echo '<td>'. $itens[$_SESSION['carrinho'][$i]] . '</td>';
            echo '<td align="right">';
            echo number_format($precos[$_SESSION['carrinho'][$i]], 2) . '€</tr>';
            echo '<tr>';
            $total = $total + $precos[$_SESSION['carrinho'][$i]];
        }
	?>

			<tr>
				<th align="right">Total:</th>
                <th align="right"><?php echo $total; ?> € </th>
			</tr>
		</tbody>
	</table>
    <p><a href="catalogo.php">Continuar a comprar</a> ou <a href="<?php echo $_SERVER['PHP_SELF']; ?>?vazio=1">Esvaziar o carrinho</a></p>
</div>
</body>
</html>