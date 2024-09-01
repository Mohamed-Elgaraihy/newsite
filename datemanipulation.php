<!-- Header is included from includes/header.php -->
<?php
    $title = 'Date and Time Manipulation';
    include 'includes/header.php'; 
?>

    <h1 style = "color: blue"> Date Manipulation </h1>
    <?php
    //get the date now 
    $datenow = getdate();
    echo "Today's Date is: ".$datenow['mon']."/".$datenow['mday']."/".$datenow['year']."<br>";
    //get date and time with format
    print date("m/d/y h:i:s a<br>", time()).'<br>';  
    

    ?>
<!-- footer is included from includes/footer.php -->
<?php include 'includes/footer.php' ?>