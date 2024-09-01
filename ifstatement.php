<!-- Header is included from includes/header.php -->
<?php
    $title = 'If Statement';
    include 'includes/header.php'; 
?>

    <h1 style="color: blue">If Statement</h1>
    <!-- If Statement to take action because of condition -->
    <?php
    $grade = 50;
    if($grade >= 50){
        echo  "<h3 style = 'color: green'> You Are Passed </h3>";
    }else{
        echo  "<h3 style = 'color: red'> You Are Failed </h3>";
    }

    //try three conditions
    $grade = 'c';
    if($grade == 'A'){
        echo "<h3 style= 'color:green'>You are Fantastic</h3>";
    }elseif($grade == 'B'){
        echo "<h3 style= 'color:brown'>You Did Well</h3>";
    }else{
        echo "<h3 style= 'color:red'>You Are Failed</h3>";
    }
    ?>
<!-- footer is included from includes/footer.php -->
<?php include 'includes/footer.php' ?>