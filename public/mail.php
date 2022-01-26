<?php

	$name    = $_POST['name'];
	$email   = $_POST['email'];
	$message = $_POST['message'];
	$subject = 'A new website query';

	$mailheader = 'From:' . $name . '<' . $email . ">\r\n";

	$receiver = 'me@gillmourtunhira.com';

	mail( $receiver, $subject, $message, $mailheader )
	or die( 'Error' );

	echo 'message send';

