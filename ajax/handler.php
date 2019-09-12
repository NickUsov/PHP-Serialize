<?php
    $name = $_GET['name'];
    $names= ['mary', 'maria', 'marsello', 'mark', 'mark', 'max'];
    $name = strtolower($name);
    $response = '';
    foreach ($names as $key ) {
        if(strpos($key, $name)!== false){
            $response .= $key.'<br>';
        }
    }
    echo $response;
?>