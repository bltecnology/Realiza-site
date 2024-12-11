<!doctype html>
<html lang="pt-br">
<!--
# ~~~~~~~~~~~~~~~~~~~~~~ #
# Developed by Volkertek #
# All rights reserved    #
# ~~~~~~~~~~~~~~~~~~~~~~ #
-->
<head>
  <!-- Title -->
  <title>PHP Error Log | powered by Volketek</title>
  <!-- CharSet -->
  <meta charset="utf-8">
</head>
<body>
  <h1>PHP Error Log | powered by Volketek</h1>
  <h3><a href="javascript:location.reload()">Atualizar</a></h3>
  <hr>
  <?php
  # -------------------------
  $filename = 'php-errors.log';
  # -------------------------
  if (file_exists($filename))
  {
    $lines = file($filename, FILE_SKIP_EMPTY_LINES);
    $count = 0;
    # -------------------------
    echo '<pre>';
    # -------------------------
    foreach ($lines as $line)
    {
      $count += 1;
      # -------------------------
      echo '<b>'.str_pad($count, 2, 0, STR_PAD_LEFT).'.</b> '.$line;
    }
    # -------------------------
    echo '</pre>';
  }
  else
  {
    echo 'Nenhum erro encontrado';
  }
  ?>
<script>setTimeout(function(){location.reload()},60000)</script>
</body>
</html>