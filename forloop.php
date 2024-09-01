<!-- Header is included from includes/header.php -->
<?php
    $title = 'For Loop';
    include 'includes/header.php'; 
?>

    <h1 style= "color: blue">FOR LOOP</h1>
    <?php

        for($count = 0 ;$count < 10; $count++){
            echo "<p>Thank U</p>";
        };
        for($count = 0 ;$count < 10; $count++){
            echo "<p>The Count is: $count</p>";
        };
    ?>
<!-- footer is included from includes/footer.php -->
<?php require 'includes/footer.php' ?>