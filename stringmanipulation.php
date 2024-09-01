<!-- Header is included from includes/header.php -->
<?php
    $title = 'String Manipulation';
    include 'includes/header.php'; 
?>

    <h1 style = "color: blue"> String Manipulation </h1>
    <?php

        $phrase1= "Student Who Came Late";
        $phrase2= ",Stand up";
    //String Concatination
        echo "<h2 style='color: orange'>String Concatination</h2>";
        echo $phrase1." Called Marry ".$phrase2;
        echo '<hr>';
    //String Transformation
        echo "<h2 style='color: orange'>String Transformation</h2>";
        $Name = "mohamed elgaraihy";
        //upper first char of the sentence
        echo ucfirst($Name)."<br>";
        //upper first char of any Word
        echo ucwords($Name)."<br>";
        //Upper ALL Chars
        echo strtoupper($Name)."<br>";
        //Lower ALL Chars
        echo strtolower("HOW ARE U?")."<br>";
        echo "<hr>";
    //Important String Functions
        echo "<h2 style='color: orange'>String Functions</h2>";
        //repeat text
        echo "Repeat Char 10 Times: ".str_repeat("a",10)."<br>";
        //repeat text with nested function
        echo "Repeat Char 10 Times with nested: ".strtoupper(str_repeat("a",10))."<br>";
        //Trim text 
        echo "Without Trim: "."A"." B C D "."E"."<br>";
        echo "With Trim rtl and ltr: "."A".trim(" B C D ")."E"."<br>";
        echo "With Trim ltr: "."A".ltrim(" B C D ")."E"."<br>";
        echo "With Trim rtl: "."A".rtrim(" B C D ")."E"."<br>";
        //Length of the string
        echo "Length of the Name: ".strlen($Name)."<br>";
        // Substract chars from sentence
        echo "Substract Chars From Sentence: ".substr($Name,6,3)."<br>";
        // Position of char
        echo "Position of char 'h' is: ".strpos($Name,"h")."<br>";
        // Find The Charachter and complete the word with it
        echo "Find The Char 'h' is: ".strchr($Name,"h")."<br>";
        // Find and replace
        echo "Replace word Stand With Sit: ".str_replace("Stand","Sit",$phrase2)."<br>";

    ?>
<!-- footer is included from includes/footer.php -->
<?php include 'includes/footer.php' ?>