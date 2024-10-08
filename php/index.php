<?php
$con=mysqli_connect("db-server:3306","root","root");
if($con)
{
    echo "success";
}
else{
    echo "failed";
}
?>