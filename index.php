<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>

  <?php

  $allBoutThatDatabase = [

      [
          'question' => 'Do you know?',
          'answer' => 'Yep',
      ],
      [
          'question' => 'And that?',
          'answer' => 'Yep',
      ],
      [
          'question' => 'Oh, and also?',
          'answer' => 'Yep',
      ],
      [
          'question' => 'Everything?',
          'answer' => 'Yep',
      ],


    ];




   ?>
  <body>

    <!-- GOAL:
      Riscrivere questa pagina del sito google
      https://policies.google.com/faq.
      Ci sono diverse domande con relative risposte. Gestire il "Database" e la visualizzazione di queste domande e risposte con PHP.
      HINT:
      Crearsi un array con i dati come l'ultimo esercizio visto a lezione (hotels) e usare un foreach per stampare i dati in esso contenuti -->

      <header>

        <img src="img/google.pn" alt="">

      </header>

      <main>

        <?php

          foreach ($allBoutThatDatabase as $faq) {

            echo "<div>" . $faq['question'] . "</div>";
            echo "<div>" . $faq['answer'] . "</div>";

          }

         ?>

      </main>

      <footer></footer>

  </body>
</html>
