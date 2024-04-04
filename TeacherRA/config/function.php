<?php

require_once 'admin.php';

function display_data(){
    global $data;
    $query = "select * from users"; 
    $result = mysqli_query($data, $query);
    return $result;
}
?>
