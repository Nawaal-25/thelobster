<?php

$con=mysqli_connect("localhost:5222","root","","lobster");
if(!$con)
    {
        echo"<script>alert('Cannot connect');</script>";
        exit();
    }    

?>