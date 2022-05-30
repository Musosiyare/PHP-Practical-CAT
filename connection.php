<?php
$conn = mysqli_connect('localhost','root','','cat');
if ($conn) {
    echo "connection success";
}else {
    echo "Error";
}
?>