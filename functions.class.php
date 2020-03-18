<?php
	include("connect.class.php");

	$name = $_POST['name_presents'];
	$school = $_POST['school_presents'];
	$phone = $_POST['phone_presents'];
	$email = $_POST['email_presents'];
	$btn_confirm = $_POST['btn_send'];

	if(isset($btn_confirm)){
    $confirm = mysqli_query($link, "INSERT INTO presents(name_presents,school_presents,phone_presents,email_presents)VALUES('$name','$school','$phone','$email')");
    if(!$confirm){
        echo "erro";
    }else {
	  header("location: sucesso.php");
    
    }
}
?>