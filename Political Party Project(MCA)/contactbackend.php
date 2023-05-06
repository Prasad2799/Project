<?php
include 'connecting.php';
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone_number=$_POST['phone_number'];
 $msg_subject=$_POST['msg_subject'];
 $message=$_POST['message'];
 
 
 
 $testArray=array(
 'name'=>"'".$name."'",
 'email'=>"'".$email."'",
 'phone_number'=>"'".$phone_number."'",
 'msg_subject'=>"'".$msg_subject."'",
 'message'=>"'".$message."'",
 );
 
 
 //print_r($testArray);
 //exit;
 
 $columns = implode(', ',array_keys($testArray));
        $values = implode(', ',array_values($testArray));
        $sql="INSERT INTO `contact us` ($columns) VALUES ($values)";
		// print_r($sql);
 //exit;
        if ($connection->query($sql) === TRUE)
        {
        echo '<script type="text/javascript">';
        echo 'alert(" Info Saved Successfully!");';
        echo 'window.location.href = "./contact.php"';
        echo '</script>';
        }
        else
        { 
	    echo mysqli_error($connection);
        echo '<script type="text/javascript">';
        echo 'alert("Error Occured! Record not Saved!");';
        echo 'window.location.href = "./contact.php"';
        echo '</script>';
        }
?>