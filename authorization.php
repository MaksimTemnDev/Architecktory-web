<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/forWeb3/pdo.php");
require_once("logic.php");

//Переменные
$login = $_POST['login'];
$pas = $_POST['password'];

//Обработка действий
#$exist = $pdo->query("SELECT * FROM staffw.users WHERE BINARY login='$login'");
$exist = $pdo->prepare("SELECT * FROM staffw.users WHERE BINARY login= :logs ");
$exist->bindValue(":logs", $login);
$exist->execute();
$result = $exist->fetch();
$find = password_verify($pas, $result['password']);
if ($find) {
    $_SESSION['login'] = $login;
    $_SESSION['id'] = $result['id'];
    header("Location: webSite.php");
} else {
    if(empty($result)){
        $errors = "no ac";
    }else{
        $errors = "no ps";
    }
    require_once("sign.php");
}
#zxcv@gmail.com
#123456!qwe
?>