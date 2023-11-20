<?php
$produto = "Produto";
$preco = "EUR 19.99";
$descricao = "descrição aleatória";
$envio = "Envio: Frete internacional econômico grátis.";
$entrega = "Entrega: O tempo estimado é de 9 dias.";
$retorno = "Devoluções: Devolução em até 30 dias. O comprador paga o frete de devolução.";
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Trouble Tickets</title>
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
    <div class="header">
      <div class="logo">Sky Buy</div>
      <div class="barra-pesquisa">
        <input type="text" placeholder="Pesquisar...">
      </div>
      <div class="buttons">
        <button>Shop</button>
        <button>Who we are</button>
        <button>My profile</button>
        <button>Shopping Card</button>
      </div>
    </div>
    <div class="produto">
      <h2><?php echo $produto; ?></h2>
      <p class="preco"><?php echo $preco; ?></p>
      <p><?php echo $descricao; ?></p>
      <p><?php echo $envio; ?></p>
      <p><?php echo $entrega; ?></p>
      <p><?php echo $retorno; ?></p>
    </div>
  </body>
</html>