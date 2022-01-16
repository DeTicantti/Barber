<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'recurso';
$con = mysqli_connect("localhost","root","","recurso");
if ($con->connect_errno) {
    echo "Algo salio mal".$con->errno;
    exit;
}




/*<?php*/

/*
$con = new mysqli("$host".','.$user);
if ($con->connect_errno) {
    echo "Algo salio mal".$con->errno;
}
*/

?>