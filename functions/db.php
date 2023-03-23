<?php
$con = mysqli_connect('localhost','root','','claimant-schema');

if($con->connect_error){
    die("conn failed".$con->connect_error);

}


if($con){
    echo 'connection established';
}
//function to cclean string values
function escape($string){
    global $con;
    return mysqli_real_escape_string($con, $string);

}function Query($query){
    //global $res;
    global $con;
     return mysqli_query($con, $query);
     //return $res;
}
//confirmation function 
function confirm($result){
    global $con;
    if(!$result){
        die('Query Failed'.mysqli_error($con));
    }
}

//fecth data from database
function fetch_data($result){
    return mysqli_fetch_assoc($result);
}
function row_count($count){
    return mysqli_num_rows($count);
}
?>