<?php
//Data from database

$uid = $_POST['userid'];
$pw = $_POST['password'];

if ($uid == 'ben' and $pw == 'ben23') {
    session_start();
    $_SESSION['sid'] = session_id();
    echo "Logged in successfully";
}
