<!-- Header is included from includes/header.php -->
<?php
    $title = 'Switch Statement ';
    include 'includes/header.php'; 
?>

<h1 style="color: blue">Switch Statement</h1>
    <?php
    //Switch like if and elseif for do action depend on conditions
        $grade = 'A';
        switch($grade){
            case 'A':
                echo "<h3 style = 'color: green'> You Are Fantastic</h3>";
                break;
            case 'B':
                echo "<h3 style = 'color: brown'> You Did Well</h3>";
                break;
            default:
                echo "<h3 style = 'color: Red'> You Are Failed</h3>";
                break;
        }
    ?>
<!-- footer is included from includes/footer.php -->
<?php include 'includes/footer.php' ?>