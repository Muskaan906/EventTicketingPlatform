<?php
    $search;
    if (isset($_POST["UserQuery"])) {
        $search = $_POST["UserQuery"];
    }

    $host = "localhost";
    $database = "cosc310";
    $user = "83066985";
    $password = "83066985";

    $connection = mysqli_connect($host, $user, $password, $database);

    $error = mysqli_connect_error();
    if($error != null)
    {
    $output = "<p>Unable to connect to database!</p>";
    exit($output);
    }
    else
    {
        $sql = "SELECT * FROM event WHERE EventName LIKE '%".$search."%'";

        $results = mysqli_query($connection, $sql);

        while($row = mysqli_fetch_assoc($results)) {
            echo "<div class='concert'>";

            // No image in event table in database
            //echo "<img src='concert1.jpg' alt='Concert 1'>";
            echo "<h2>".$row['EventName']."</h2>";
            echo "<p>Date: ".$row['DateTime']."</p>";
            echo "<p>Location: ".$row['Location']."</p>";
            //echo "<p>Price: $50</p>";
            echo "<a href='#' class='btn'>Add to Cart</a>";
            echo "</div>";
        }
        mysqli_free_result($results);
        mysqli_close($connection);
    
    }?>