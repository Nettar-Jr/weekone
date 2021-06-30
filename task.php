
<?php

// A function that 
function rangeFunc($min, $max){

    // range funtion 
    $numRange = range($min, $max);

    // declare an empty array
    $newarr = [];

    foreach ($numRange as $value) {
        
        // push each number (from 10 to 19) in to the empty array
        array_push($newarr, "$value");
    }
    
    // Display results
        echo "Items in  New Array are:  ";
        print_r($newarr);

        echo "<br>";
        echo "<br>";

        echo "The sum of items in New Array is: ";
        print_r(array_sum($newarr));
        
    }

    // Call function with arguments
    (rangeFunc(10, 19));

     
?>