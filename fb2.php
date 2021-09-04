<?php
$username="root";
$password="";
$server="localhost";
$dab="fb_data";
$con=mysqli_connect($server,$username,$password,$dab);
if($con){
    ///echo "connection successfully"."ksdj";
}
else{
    echo "connection not successfully";
}


?>