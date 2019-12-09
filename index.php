<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GOOGLE FAQ</title>
  </head>
  <?php
    include "data.php";
  ?>
  <body>
    <!-- Riscrivere questa pagina del sito google
    https://policies.google.com/faq.
    Ci sono diverse domande con relative risposte.
    Gestire il "Database" e la visualizzazione di
    queste domande e risposte con PHP. -->
    <?php
    foreach ($faq as $key => $value) {
      ?>
        <h2><?php echo $value['question']; ?></h2>
      <?php
        echo '<br>';
      ?>
        <p><?php echo $value['answer']; ?></p>
      <?php
        echo '<br><br>';
    }
    ?>

  </body>
</html>
