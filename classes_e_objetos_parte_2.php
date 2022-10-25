<html>
<head>
  <title>Classes e objetos parte 2</title>
</head>
<body>
  <?php
  class CarrinhoDeCompras
  {
    var $itens; // Itens no carrinho de CarrinhoDeCompras
    // Adiciona $num artigos do $artnr ao carrinho

    function adiciona_item ($artnr, $num)
    {
      $this->itens[$artnr] = $num;
    }

    // Retira $num artigos do $artnr do carrinho

    function remove_item ($artnr, $num)
    {
      if ($this->itens[$artnr] > $num) {
        $this->itens[$artnr] -= $num;
        return true;
      } else {
        return false;
      }
    }
  }

  $carrinho = new CarrinhoDeCompras;
  $carrinho->adiciona_item("Banana", 12);
   ?>
</body>
</html>
