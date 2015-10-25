<?php 
    
    // require('Person.php');
    // Not the normal post here
    $params = json_decode(file_get_contents('php://input'),true);
    
    $registered = array();
    // $cee = new Person('cee', 'ceepas', '1', '');
    if($params['key'] === 'key321'){
        //include('chat.php');
        echo json_encode(array("status" => 1));
    } else{
        echo json_encode(array("status" => 0));
    }
    // echo json_encode(array("status" => "0"));
    // foreach($params as $key => $value) {
    //   echo "$key: $value, ";
    // }
    // name, password, room, key
    // echo $params;
    
?>