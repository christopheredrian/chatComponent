<?php 

//     echo "<code><pre>DEBUGGING PURPOSES: ";
//       foreach ($_SESSION as $key => $value) {
//           echo "$key: $value<br>";
//       }
//   echo "</pre ></code>";
// TODO: look secure main.php
$params = json_decode(file_get_contents('php://input'),true);
require('FileUtilities.php');
if (isset($params['action'])) {
  $action = $params['action'];
  switch ($action) {
      case 'fetchData':
          FileUtilities::fetchData();
          break;
      case 'appendToMessages':
           FileUtilities::appendToMessages($params['sender'], $params['message']);
          break;
      
      default:
          // code...
          break;
  }
} else {
    return json_encode(array('status' => 0));
}
// FileUtilities::appendToMessages("penelope", "Hello Aswell!!");
// FileUtilities::pushPerson("Penelope");
//FileUtilities::popPerson("Penelope");

?>
