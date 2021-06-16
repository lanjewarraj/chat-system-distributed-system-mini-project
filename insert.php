<?php
if(isset($_POST['username']) || isset($_POST['msg'])){
$connection = mysqli_connect('localhost','root','','project');
$username = mysqli_real_escape_string($connection,$_POST['username']);
$msg = mysqli_real_escape_string($connection,$_POST['msg']);

$query = "INSERT INTO chat(username,message) VALUES ('$username','$msg')";
$run = mysqli_query($connection,$query);
    if(!$run){
        echo mysqli_error($connection);
    }
}