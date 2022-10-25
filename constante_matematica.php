<html>
<head>
  <title>Constantes matemática com função</title>
</head>
<body>
  <?php

  function calculaAreaCirculo ($raio)
{
  return M_PI * pow($raio, 2);
}

$meuRaio = 5;
$area = calculaAreaCirculo ($meuRaio);

echo "<b>Raio</b> = $meuRaio<br>";
echo "<b>Área</b> = area";

   ?>
</body>
</html>
