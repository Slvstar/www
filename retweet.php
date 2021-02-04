<?php
// Including The DB Connetction file
include('includes/connect.php');


// The Retweet function! 
$userid = '2';
$tweet = $_POST['content'];
$query = "INSERT INTO tweets (user_id, tweet_content) VALUES('$userid', '$tweet')";
if (isset($retweet)) {
    $sql = "INSERT INTO tweets(user_id, tweet_content) VALUES('$userid', '$tweet'";
    mysqli_query($db, $query);
    $retweet = $_POST['retweet'];
}
