<?php 
    
    // require('Person.php');
    // Not the normal post here
    $params = json_decode(file_get_contents('php://input'),true);
    
    $registered = array();
    // $cee = new Person('cee', 'ceepas', '1', '');
    if($params['key'] === 'key321'){
        session_start();
        $_SESSION['name'] = $params['name'];
        $_SESSION['room'] = $params['room'];
        include('chat.php');
        
        
        echo "<code><pre>DEBUGGING PURPOSES: ";
        foreach ($_SESSION as $key => $value) {
            echo "$key: $value<br>";
        }
        echo "</pre ></code>";
    } else{
        echo 'invalid page should be here';
    }
    // foreach($params as $key => $value) {
    //   echo "$key: $value, ";
    // }
    // name, password, room, key
    // echo $params;
    
?>