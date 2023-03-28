<?php

$first_name  = "";
$last_name   = "";
$email       = "";
$affiliation = "";
$country     = "";
$motivation  = "";
$newsletter  = "";
$mainCaptcha  = "";
$securityCode  = "";

$errors = array();

if (isset($_POST['submit'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $affiliation = $_POST['affiliation'];
    $country = $_POST['country'];
    $motivation = $_POST['motivation'];
    $mainCaptcha  = $_POST['mainCaptcha'];
    $securityCode  = $_POST['securityCode'];

    if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($affiliation) && !empty($country) && !empty($motivation) && !empty($securityCode)) {

        if ($mainCaptcha === $securityCode) {

            try {

		$sender = "enesds-support@cmcc.it";
		$headers = "From: " . $sender;
		//email to administrator

		$MESSAGE_BODY = "Data request details: \n\nFirst name: $first_name\nLast name: $last_name\n";
		$MESSAGE_BODY .= "Email: $email\nAffiliation: $affiliation\n";
		$MESSAGE_BODY .= "Country: $country\nMotivation: $motivation";

		$send = mail('enesds-support@cmcc.it','New data request',$MESSAGE_BODY, $headers);
		if (!$send) {
		    array_push($errors, "<p class='text-danger text-center'>Something went wrong, please try again.</p>");
		}

		// email to user
		$MESSAGE_BODY2 = "Dear $first_name $last_name,\n\n";
		$MESSAGE_BODY2 .= "Thank you for your request.\n";
		$MESSAGE_BODY2 .= "You will receive an email when data is available on the data space.\n\n";
		$MESSAGE_BODY2 .= "Best regards,\n";
		$MESSAGE_BODY2 .= "ENES Data Space team\n\n";

		$send2 = mail($email,'ENES Data Space data request',$MESSAGE_BODY2,$headers);

		if (!$send2) {
		    array_push($errors, "<p class='text-danger text-center'>Something went wrong, please try again.</p>");
		}

		#header('Location: request_sent.php');
		echo "<script type='text/javascript'>  window.location='request_sent.php'; </script>";
	    }
            catch (ErrorException $e) {
                array_push($errors, "<p class='text-danger text-center'>Something went wrong. Please, try again later.</p>");
            }
        }
        else {
            array_push($errors, "<p class='text-danger text-center'>Please, insert a valid captcha code.</p>");
        }
    }
    else {
        array_push($errors, "<p class='text-danger text-center'>Please, fill out properly all the required fields.</p>");
    }
}
?>
