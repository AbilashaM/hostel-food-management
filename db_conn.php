<?php

$sname= "localhost";

$unmae= "rubeshwaran";

$password = "TM5399mr**";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}