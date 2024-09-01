<!-- Header is included from includes/header.php -->
<?php
    $title = 'While LOOP';
    include 'includes/header.php'; 
?>

    <h1 style= "color: blue">While LOOP</h1>
    <?php
     //Infinite While Loop
       // $count =0;
      //  while($count < 10){
      //      echo "<p>Iam $count, Iam Less Than 10!</p>";
     //   }

    //While Loop
        $count =0;
        while($count < 10){
            echo "<p>Iam $count, Iam Less Than 10!</p>";
            $count ++;
        }
        echo "EXIT LOOP";
    //Do While Loop
        echo '<h1 style= "color: blue">Do While LOOP</h1>';
        $count =0;
        do{
            echo '<p>Iam Do While: '.$count.'<p>';
            $count ++;
        }while($count < 10);
        echo "EXIT LOOP";
     
    ?>
<!-- footer is included from includes/footer.php -->
<?php include 'includes/footer.php' ?>