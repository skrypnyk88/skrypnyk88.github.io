<?php
//приймаємо постові дані
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$from=$_POST['from'];
//вказати куди надсилати лист
$to = "skrypnyk_d@ukr.net";
//тема і саме повідомлення
$subject = "Заявка на майстер клас Ігри Розуму";
$message = "
Форма: ".htmlspecialchars($form)."<br />	
Ім'я: ".htmlspecialchars($name)."<br />
Email: ".htmlspecialchars($email)."<br />	
Телефон: <a href='tel:$phone'>".htmlspecialchars($phone)."</a>";
$headers = "Form: no-reply.ua <no-reply@no-reply.ua>\r\nContent-type: text/html;
	charset=UTF-8 \r\n";
mail($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
?>