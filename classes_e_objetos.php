<html>
<head>
  <title>Classes e objetos</title>
</head>
<body>
  <?php
  class CarrinhoDeCompras
  {
    var $items; // itens no carrinho de CarrinhoDeCompras
    // Adiciona $num artigos do $artnr ao carrinho
    function adiciona_item($artnr, $num)
    {
      $this->items[$artnr] = $num;
    }
    // Retira $num artigos do $artnr do carrinho

    function remove_item ($artnr, $num)
  {
    if ($this->items[$artnr] > $num) {
      $this->items[$artnr] -= $num;
      return true;
    } else {
      return false;
      }
    }
  }

   ?>
</body>
</html>
