<?php 
//Подключим шапку
require_once("shapka.php");
require_once("top.php");
?>
    <?php ?>
      <!--html код страницы-->
<form action="registration.php" method="post">
<div class="container">
  <div class="row">
  <p>Регистрация:</p>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Логин</label>
    <input name="login" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo htmlspecialchars((isset($_POST["login"]))?$_POST["login"]:'');?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ФИО</label>
    <input name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo htmlspecialchars((isset($_POST["name"]))?$_POST["name"]:'');?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Дата рождения</label>
    <input name="birth" type="date" class="form-control" id="exampleInputPassword1" value="<?php echo htmlspecialchars((isset($_POST["birth"]))?$_POST["birth"]:'');?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Адресс</label>
    <input name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo htmlspecialchars((isset($_POST["address"]))?$_POST["address"]:'');?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Интересы</label>
    <input name="interests" class="form-control" id="exampleInputPassword1" value="<?php echo htmlspecialchars((isset($_POST["interests"]))?$_POST["interests"]:'');?>">
  </div><div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Пол</label>
    <div class="form-check">
  <input name="gender" class="form-check-input" type="radio" name="flexRadioDefault" value="0" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Женский
  </label>
</div>
<div class="form-check">
  <input name="gender" class="form-check-input" type="radio" name="flexRadioDefault" value="1" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Мужской
  </label>
</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ссылка на ваш профиль Вконтакте</label>
    <input name="vk" class="form-control" id="exampleInputPassword1" value="<?php echo htmlspecialchars((isset($_POST["vk"]))?$_POST["vk"]:'');?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Группа крови</label>
    <input name="grup" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo htmlspecialchars((isset($_POST["grup"]))?$_POST["grup"]:'');?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Резус-фактор</label>
    <input name="resus" class="form-control" id="exampleInputPassword1" value="<?php echo htmlspecialchars((isset($_POST["resus"]))?$_POST["resus"]:'');?>">
  </div>
  <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
  <div class="row">
  <div class="col">
  Уже есть аккаунт? <a href="sign.php" class="link-dark">Войти</a>
  </div>
</div>
  </form>

<?php
//Сообшим о наличии ошибок
if (!empty($errors)){
  $cur_err = htmlentities($errors[0]);
  echo htmlspecialchars($cur_err);
  unset($errors);
}
?>

</div>
<?php 
//Подключим подвал
require_once("podval.php")?>