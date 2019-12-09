   <?php
$first_name="First Name : ".$_POST['first_name']."<br>";
$last_name="Last Name :". $_POST['last_name']. "<br>";
$your_email="Your Email :".$_POST['email']. "<br>";
$telephone="Your Telephone :".$_POST['telephone']. "<br>";
$your_message="Your Comments :".$_POST['comments']. "<br>";
$message = "
 \n $first_name \n 
 \n $last_name \n  
 \n $your_email \n 
 \n $telephone \n 
 \n $your_message \n
";
echo $message;
include "PHPMailer_5.2.4/class.phpmailer.php"; 


$mail = new PHPMailer;
 $mail->isSMTP();                                      
 $mail->Host = 'smtp.gmail.com';

 $mail->SMTPAuth = true;          
 $mail->Username = 'twopheat@gmail.com';
 $mail->Password = 'Dean1Dean1!';           
 $mail->SMTPSecure = 'tls';              
 $mail->Port = 587;                      
 $mail->setFrom('admin@precogwest.com', 'Mailer');
 $mail->addAddress($your_email, 'Name');
 $mail->addAttachment('fileaddress');       
 $mail->isHTML(true);                              
 $mail->Subject = 'Here is the subject';
 $mail->Body    = $message;
 $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

 if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
    echo 'Message has been sent';
 }
?>
