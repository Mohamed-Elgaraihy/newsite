<!-- Header is included from includes/header.php -->
<?php
    $title = 'Functions';
    include 'includes/header.php'; 
?>

    <h1 style= "color: blue"> User Defined Functions </h1>
    <?php
    // Define Simple Function
    function write(){
        echo "How are u?<br>";
    }
    //calling the Simple function
    write();
    // Define Function receive Parameters
    function add_numbers($num1, $num2){
        $sum = $num1 + $num2 ;
        echo "The Sum of $num1 and $num2 is: $sum <br>";
    }
    //calling Function receive Parameters
    $num1 = 10;
    $num2 = 10;
    add_numbers($num1, $num2);
    // Define Function reference by value
     function add_numbers_ref($numm1, &$numm2){
        $summ = $numm1 + $numm2 ;
        echo "The Sum of $numm1 and $numm2 is: $summ <br>";
        $numm2 = $summ; //we will change the value of num 2
    }
    // Calling Function reference by value
    $numm1 = 10;
    $numm2 = 10;
    add_numbers_ref($numm1, $numm2);
    echo $numm2.'<br>';
    // Define Function which return a value
    function get_name($firstname, $lastname){
        $fullname = $firstname ." ". $lastname."<br>";
        return $fullname;
    }
    // Calling Function which return a value
    echo get_name("Mohamed","Elgaraihy");
    ?>
<!-- footer is included from includes/footer.php -->
<?php include 'includes/footer.php' ?>