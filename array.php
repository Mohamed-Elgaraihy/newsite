<!-- Header is included from includes/header.php -->
<?php
    $title = 'Array ';
    include 'includes/header.php'; 
?>

<h1 style= "color: blue">Array</h1>
    <?php
        $nums = array(5,6,8,5,2,5,4,8,5,2,1,5,8,2,85,5);
        echo "<p> $nums[0] </p>";
        echo "<p>".count($nums)."</p>";
        ////for each loop to print all array parts
        foreach($nums as $num){
            echo "<p>".$num."</p>";
           
        }
        $counts = count($nums);
        echo "------------------------------";
         ////for loop to print all array parts
        for($count=0; $count<$counts;$count++){
            echo "<p>".$nums[$count]."</p>";
        }
    ?>
 <!-- footer is included from includes/footer.php -->
 <?php include 'includes/footer.php' ?>