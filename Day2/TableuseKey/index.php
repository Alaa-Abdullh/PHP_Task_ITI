<?php  
$arr = [ 
    ["name" => "alaa", "age" => 22],  
    ["name" => "abdullh", "age" => 45], 
    ["name" => "mostafa", "age" => 88]
];

function printtable($arr){
    if (empty($arr)) {
        echo "<p> arr is empty</p>";
        # code...
    }

    echo "<table border='1' cellpadding='5' cellspacing='0' style='width:50%; text-align:center; margin:auto;'>";
    echo "<thead>";
    echo "<tr>";

    $keyvalue=array_keys($arr[0]);
    foreach ($keyvalue as  $value) {
        # code...
    echo "<th style='width:50%; text-align:center; margin:auto; background-color:#FFC0CB;'> $value</th>";
    
    }
    
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($arr as  $row) {
        # code...
        echo "<tr>";
        foreach ($row as  $value) {
            # code...
        echo "<th> $value</th>";
        
        }
        
        echo "</tr>";
    
    }
    
    echo "</tbody>";
    echo "</table>";


}

printtable($arr);



?>


