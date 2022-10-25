<html>
<head>
  <title>Case</title>
</head>
<body>
  <?php
  $d = getdate();

  switch ($d['wday'])
  {
    case '5':
      echo "Finalmente Sexta";
      break;

    case '6':
      echo "Super Sábado";
      break;

    case '0':
      echo "Domingo sonolento";
      break;
    default:
    echo "Estou esperando pelo fim de semana";
  }
   ?>
</body>
</html>
