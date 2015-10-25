<?php
    class FileUtilities{
        
        public static function fetchData() {
            echo file_get_contents('room.json');
        }
        
        public static function pushPerson($name) {
            $file = "room.json";
            $roomContents = file_get_contents($file);
            $roomObject = json_decode($roomContents, true);
            foreach ($roomObject as $key => $value) {
                echo "$key: $value";
            }
            // print_r($people);
             array_push($roomObject['people'], $name); // people has array inside
             print_r($roomObject);
             file_put_contents($file, json_encode($roomObject));
        }
        
        public static function popPerson($name) {
            $file = "room.json";
            $roomContents = file_get_contents($file);
            $roomObject = json_decode($roomContents, true);
            if (($key = array_search($name, $roomObject['people'])) !== false) {
                unset($roomObject['people'][$key]);
            }
             echo '<pre>';
             print_r($roomObject);
             echo '</pre>';
              file_put_contents($file, json_encode($roomObject));
        }
        
        
        public static function appendToMessages($sender, $body) {
            $file = "room.json";
            $roomContents = file_get_contents($file);
            $roomObject = json_decode($roomContents, true);
            foreach ($roomObject as $key => $value) {
                echo "$key: $value";
            }
            $arr = array('sender' => $sender, 'body' => $body);
             array_push($roomObject['messages'], $arr); // people has array inside
             echo '<pre>';
             print_r($roomObject);
             echo '</pre>';
             file_put_contents($file, json_encode($roomObject));
        }
        
        
    }

?>