<?php 

    echo "<code><pre>DEBUGGING PURPOSES: ";
      foreach ($_SESSION as $key => $value) {
          echo "$key: $value<br>";
      }
   echo "</pre ></code>";
// TODO: look secure main.php
// require('FileUtilities.php');

// FileUtilities::appendToMessages("penelope", "Hello Aswell!!");
// FileUtilities::pushPerson("Penelope");
//FileUtilities::popPerson("Penelope");
?>
