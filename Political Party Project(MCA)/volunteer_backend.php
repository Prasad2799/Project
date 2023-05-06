
<?php
include 'connection.php';
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address1=$_POST["address1"];
$address2=$_POST["address2"];
$message=$_POST["message"];

//print_r($testArray);

//exit;

$testArray=array(
'firstname'=>"'".$firstname."'",
'lastname'=>"'".$lastname."'",
'email'=>"'".$email."'",
'phone'=>"'".$phone."'",
'address1'=>"'".$address1."'",
'address2'=>"'".$address2."'",
'message'=>"'".$message."'",

);


$columns = implode(', ',array_keys($testArray));
        $values = implode(', ',array_values($testArray));
        $sql="INSERT INTO `volunteer` ($columns) VALUES ($values)";
        if ($connection->query($sql) === TRUE)
        {
        echo '<script type="text/javascript">';
        echo 'alert("volunteer Info Saved Successfully!");';
        echo 'window.location.href = "./volunteer.php"';
        echo '</script>';
        }
        else
        {
        echo '<script type="text/javascript">';
        echo 'alert("Error Occured! Record not Saved!");';
        echo 'window.location.href = "./volunteer.php"';
        echo '</script>';
        }

?>

