<?php
//Старт сессии
require_once($_SERVER['DOCUMENT_ROOT'].'/forWeb3/logic.php');
?>
<?php 
//Обработка действий
if(!empty($_SESSION["id"]))
{
  #unset($_COOKIE);
  unset($_SESSION["id"]);
}
?>
<?php
//Подключим шапку
 require_once("shapka.php")
 ?>
 <?php require_once("top.php")?>

  <!--html код страницы-->
  <div class="container">
    <div class="row gx-20">
      <div class="col">
        Вы вошли как гость. <a href="sign.php" class="link-dark">Авторизоваться или зарегистрироваться</a>
      </div>
    </div>
  </div>
      <?php 
      //Подключим подвал
      require_once("podval.php")?>