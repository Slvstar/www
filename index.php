<?php
/*
The main page content
*/
include("page-content1.php");
?>
<!-- The tweet form Goes here -->
<form id="tweet-form" method="POST" action="tweet.php">
    <div class="row">
        <div class="col-12">
            <textarea class="form-control" id="content" name="content" rows="7" placeholder="Hello there! .. What are you thinking about?"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" name="tweet" id="tweet" value="share" class="submit mt-2 w-100 px-3 py-1">Tweet</button>
        </div>
    </div>
    <small>Check all the tweets <a href="#">here</a></small>
</form>
<!-- The tweet form Ends here-->
<?php
include("page-content1.php");
?>