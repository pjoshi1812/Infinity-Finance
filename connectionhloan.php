<?php

$con=mysqli_connect("localhost","root","","hloan");
if(mysqli_connect_error())
{
    echo"<script>alert('cannot connect');</script>";
    exit();
}
?>