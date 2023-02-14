<?php
$name = $_POST['name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$name = htmlspecialchars($name);
$lastName = htmlspecialchars($lastName);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$name = urldecode($name);
$lastName = urldecode($lastName);
$email = urldecode($email);
$tel = urldecode($tel);
$name = trim($name);
$lastName = trim($lastName);
$email = trim($email);
$tel = trim($tel);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("coffanskiy@gmail.com", "Заявка с сайта", "\nИмя: ".$name."\nФамилия: ".$lastName."\nE-mail: ".$email."\nНомер ".$tel ,"From:admin@coffanskiy222.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>