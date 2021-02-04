<?php
/*
The Connection to the Database
I'm using mysqli since I'm on localhost, however this connection could be done using PDO!
*/

$db = mysqli_connect("localhost", "root", "", "twitter");

if (!$db) {
    echo 'Check the data base connection';
}
