<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">

  </head>


  <body>

      <header>
        <div class="logo">
          <img src="img/google.png" alt="">
          <span> <a id="privacy" href="#">Privacy e Termini</a> </span>
        </div>

        <div class="nav flex">
          <ul class="flex">
            <li> <a href="#">Introduzione</a> </li>
            <li> <a href="#">Norme sulla privacy</a> </li>
            <li> <a href="#">Termini di servizio</a> </li>
            <li> <a href="#">Tecnologie</a> </li>
            <li> <a href="#">Domande frequenti</a> </li>
          </ul>

          <span> <a href="#">Account Google</a> </span>


        </div>



      </header>

      <main>

        <?php

        require_once "require.php";



          foreach ($allBoutThatDatabase as $faq) {
            faqNumb($faq);
            echo '<h1 class="question">' . $faq['question'] . '</h1>'
            . " <br> " .
            "<p class='answer'>" . $faq['answer'] . "</p>";
            }



            function faqNumb($faq){
              $numb = count($faq);
              echo $numb;
          }





         ?>

      </main>

      <footer class="flex">
        <ul class="flex">
          <li> <a href="#">Google</a> </li>
          <li> <a href="#">Tutto su Google</a> </li>
          <li> <a href="#">Privacy</a> </li>
          <li> <a href="#">Termini</a> </li>
        </ul>

        <span class="flex">
          <img src="img/lingua.png" alt="">
          <select class="" name="">
            <option value="">Italiano</option>
            <option value="">Fran&#231;ais</option>
            <option value="">English</option>
            <option value="">Espa&#241;ol</option>
          </select>
        </span>

      </footer>

  </body>
</html>
