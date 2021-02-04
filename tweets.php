<?php
include_once('includes/page-content1.php');

// This query to get data from DB. it joins the users and the tweets tables together
$sql = "SELECT *
FROM tweets
INNER JOIN users ON tweets.user_id=users.user_id";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
            <div class="container main-tweets">
                <div class="card m-2">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                        </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0">' . $row['user_name'] . '</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="card-body">
                    <div class="text-muted h7 mb-2">' . $row['tweet_date'] . '</div>
                        <p class="card-text">
                        ' . $row['tweet_content'] . '
                        </p>
                    </div>
                    <div class="card-footer">
                        <form method="POST" action="retweet.php">
                            <button name="retweet" class="retweet" type="submit">Retweet</button>
                        </form>
                    </div>
                </div>
            </div>
            ';
    }
} else {
    echo '<h1> Nothing were found </h1>';
}
include_once('includes/page-content2.php');