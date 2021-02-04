<?php
include('connect.php');

$userid = '1';
$tweet = $_POST['content'];

$query = "INSERT INTO tweets (user_id, tweet_content) VALUES('$userid', '$tweet')";
mysqli_query($db, $query);

header('location:tweets.php');