<?php
session_start();
$email = $_POST['email'];
$contactName = $_POST['contactName'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$emailError = '';
$errorsFound = false;
$namePattern = '';
$mobilePattern = '';


 if (!empty($_POST))
  {


    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
		$_SESSION['cleanEmail'] = filter_var($email, FILTER_SANITIZE_EMAIL);
		$emailError = '<span style="color:red">Must be numeric</span>';
		$errorsFound = true;
    }

    
    if (!preg_match('/^[-a-z\d]*$/i', $contactName)) {
    	$_SESSION['badName'] = $contactName;
        $nameError = 'Name missing or incorrect<br>';
        $errorsFound = true;
        }




            if (!$errorsFound)
    {



      echo ("success");
      session_destroy ();

      }

      else {
      	header('Location:index.php');
      }
      
}

?> 