<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/forWeb3/logic.php');
//Подключим шапку
require_once("shapka.php");
require_once("top.php");
?>
<!--html код страницы-->
<div class="container">
<p>Авторизация:</p>
<form action="authorization.php" method="post">
  <input name="login" placeholder="Логин" value="<?php echo htmlspecialchars((isset($_POST["login"]))?$_POST["login"]:'');?>">
  <input type="password" name="password" placeholder="Пароль">
  <input type="submit" value="Войти">
</form>
<div class="row">
  <div class="col">
  Нет аккаунта? <a href="booking.php" class="link-dark">Зарегистрироваться</a>
  </div>
</div>
</div>


<?php
//Обработка действий
if(!empty($errors))
{
  if($errors != "no ac")
  {
    echo '<p>Введён неправильный пароль</p>';
  }else{
    echo '<p>Введён неправильный логин</p>';
  }
}
?>

</div>
<?php
//Подключим подвал
require_once("podval.php")?>