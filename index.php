<?php
/*
The main page content
*/
include("<page-content1.php"); // Including the header file 
?>

<div class="the-container">
    <div class="navbar">
        <div class="menu">
            <h3 class="logo">Coding<span>Challenge</span></h3>
            <div class="hamburger-menu">
                <div class="bar"></div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="main">
            <section class="page-content">
                <div class="overlay">


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
                </div>
            </section>
        </div>
        <div class="shadow one"></div>
        <div class="shadow two"></div>
    </div>
    <div class="links">
        <ul>
            <li class="active">
                <a href="#" style="--i: 0.05s">Tweet Now!</a>
            </li>
            <li>
                <a href="tweets.php" style="--i: 0.1s">Tweets!</a>
            </li>
        </ul>
    </div>
</div>
<script src="script.js"></script>
</body>

</html>