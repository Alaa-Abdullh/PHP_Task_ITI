<?php 
// var_dump ($_POST);
// echo $_POST['fname'];
// echo $_POST['lname'];



// echo $_POST['checkbox'];
// echo $_POST['gender'];

echo "fname : " .$_POST['fname']. "<br>" ;
echo "lname : " .$_POST['lname']. "<br>";
if (isset($_POST['checkbox']) && is_array($_POST['checkbox'])) {
    echo "checkbox : " . implode(", ", $_POST['checkbox']) . "<br>";
} else {
    echo " No selection <br>";
}
echo "gender : " .$_POST['gender']. "<br>";




?>