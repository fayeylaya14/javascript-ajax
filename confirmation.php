<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars(trim($_POST["name"]));
        $comment = htmlspecialchars(trim($_POST["comment"]));

        if(!empty($name) && !empty($comment)) {
            echo "<p> Hi, <b>$name</b>. Your comment has been sent!";
            echo "<p> Here's the comment you sent: <b>$comment</b>";
        } else {
            echo "<p>Please fill all fields!</b>";
        }
    } else {
        echo "<p>Something went wrong. Please Try Again.</p>";
    }
?>