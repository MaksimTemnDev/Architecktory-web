<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/forWeb3/pdo.php");
//Подклюючиться к бд
$db = $pdo;

//Переменные
$log = $_POST['login'];
$pass = $_POST['password'];
$name = $_POST['name'];
$resus = $_POST['resus'];
$interests = $_POST['interests'];
if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
}
$vk = $_POST['vk'];
$grup = $_POST['grup'];
$birth = $_POST['birth'];
$address = $_POST['address'];

//Ошибки
$errors = array();


//Обработка действий
if (trim($_POST['login']) == '') {
    $errors[] = "Введите логин";
}

if (trim($pass) == '') {
    $errors[] = "Введите пароль";
}

if (!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $log)) {
    $errors[] = "Введите правильный email";
}

$exist = $db->prepare("SELECT * FROM `users` WHERE login = :logs ");
$exist->bindValue(":logs", $log);
$exist->execute();
$check = $exist->fetch();
if ($check) {
    $errors[] = "Такой пользователь уже существует";
}

if (preg_match("/[^A-Za-z0-9[:punct:][:space:]]/", trim($pass))) {
    $errors[] = "Пароль дожен содержать только латинские буквы или цифры";
}

if (mb_strlen($pass) <= 6) {
    $errors[] = "Пароль слишком короткий";
}

if (empty($name)) {
    $errors[] = "Введите ФИО";
}

//Если пройдена проверка
if (empty($errors)) {
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $query = "INSERT INTO `users`(`id`, `login`, `password`, `name`, `resus`, `interests`, `gender`, `vk`, `grup`, `birth`, `address`) VALUES (0, :logs, :pass, :nm, :resus, :inter,:gen,':vk',:grup, :bth, :addrs)";
    $exist = $db->prepare($query);
    $exist->bindValue(":logs", $log);
    $exist->bindValue(":pass", $pass);
    $exist->bindValue(":nm", $name);
    $exist->bindValue(":resus", $resus);
    $exist->bindValue(":inter", $interests);
    $exist->bindValue(":gen", $gender);
    $exist->bindValue(":grup", $grup);
    $exist->bindValue(":bth", $birth);
    $exist->bindValue(":addrs", $address);
    $exist->execute();
    $check = $exist->fetch();

    // $query = "SELECT * FROM staffw.users WHERE login= :logs ";
    // $exist = $db->prepare($query);
    // $exist->bindValue(":logs", $log);
    //$check = $exist->fetch();
    $check = intval($db->lastInsertId());
    $_SESSION['login'] = $log;
    //$_SESSION['id'] = $check["id"];
    $_SESSION['id'] = $check;
    header("Location: webSite.php");
} else {
    $_SESSION['login'] = 'er login';
    require_once('booking.php');
}
?>