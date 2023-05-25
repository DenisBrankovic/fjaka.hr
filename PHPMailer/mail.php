<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	   
	require 'vendor/autoload.php';
	    	
    if(isset($_POST["sbmtBtn"])){
		 $name = $_POST["name"];
		 $subject = $_POST["subject"]; 
		 $mailFrom = $_POST["email"];

		 $message = $_POST["content"];
		 
		 $mailTo = "admin@fjaka.hr";
		  
		$mail = new PHPMailer();
        
        try{
            $mail->SMTPDebug = 2;
            $mail->isSMTP(); 
            $mail->Host       = 'smtp.gmail.com'; 
            $mail->SMTPAuth   = true;
            $mail->Username   = 'admin@fjaka.hr';
            $mail->Password   = 'fleahrllmzjesacj';
            $mail->SMTPSecure = 'sll'; 
            $mail->Port       = 587; 
            $mail->setLanguage('hr', '/optional/path/to/language/directory/');

            $mail->setFrom($mailFrom, $mailFrom);
            $mail->addAddress('admin@fjaka.hr'); 
                                            
            $mail->isHTML(true);                                  
            $mail->Subject = $subject;
            
            $senderAndMessage = "From: ".$name."\n\n".$message; 
            $mail->Body    = nl2br($senderAndMessage);
            $mail->AltBody = nl2br($senderAndMessage);

            header("location: confirmation.php");
            $mail->send();
                        
        }catch(Exception $e){
            echo "Došlo je do greške prilikom slanja poruke."; 
        }
	 }	