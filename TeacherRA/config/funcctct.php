<?php

require_once 'contactlist.php';

function display_data(){
    global $data;
    $query = "select * from messages"; 
    $result = mysqli_query($data, $query);
    return $result;
}
?>