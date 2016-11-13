<?php
//приймаємо постові дані
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
//вказати куди надсилати лист
$to="skrypnyk_d@ukr.net"
//тема і саме повідомлення
$subject = "Заявка з сайту жалюзі";
$message = "
Лист відправлений з моєї форми <br />
Клієнт хоче: ".htmlspecialchars($what)."<br />	
Ім'я: "htmlspecialchars($name)."<br />	
Телефон: "htmlspecialchars($phone);
$headers = "Form: mysite.ua <site-email@mysite.ua>\r\nContent-type: text/html;
	charset=utf8 \r\n";
mail($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
?>