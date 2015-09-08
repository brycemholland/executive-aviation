<?php session_start();
if(isset($_POST['Submit'])) {
$youremail = 'brycemholland@gmail.com';
$fromsubject = 'Executive Aviation Contatact Form';
$fname = $_POST['fname'];
$mail = $_POST['mail'];
$phone = $_POST['phone']; 
$message = $_POST['message']; 
  $to = $youremail; 
  $mailsubject = 'Masage recived from'.$fromsubject.' Contact Page';
  $body = $fromsubject.'
  
  The person that contacted you is  '.$fname.'
   E-mail: '.$mail.'
   Phone Number: '.$phone.'
  
   Message: 
   '.$message.'
  
  |---------END MESSAGE----------|'; 
  mail($to, $subject, $body);
}
?> 
<script>
  window.location = "index.html";
</script>