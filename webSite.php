<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/forWeb3/logic.php');
//Подклюючиться к бд
$db = $pdo;
?>


<?php 
//Подключим шапку
require_once("shapka.php");
require_once("top.php");
?>
  <div class="container text-center mt-20">
    <?php 
    //Обработка действий

    $login = $_SESSION["login"];
    $eb = $db->query("SELECT * FROM staffw.users WHERE login='$login'");
    $res=$eb->fetch();
    if ($res){
      echo htmlspecialchars("Здравствуйте, ".$res['name']);
    }
    ?>
    <!--html код страницы-->
    <div class="row">
    <a href="webbase.php" class="link-dark">Выйти</a>
    </div>
        <form action="webSite.php" method = "get">
            <label> Фильтрация результата поиска</label>
            <div class="mt-2 mb-3">
                <label class ="mb-2">Фильтрация по дате:</label>
                <input type="date" name="dateFrom" placeholder="Дата от" value= "<?= setValue($_GET, 'dateFrom', 'clearFilter') ?>", class="form-control">
                <input type="date" name="dateTo" placeholder="Дата до" value="<?= setValue($_GET, 'dateTo', 'clearFilter') ?>" class="form-control mt-3">
            </div>


            <div class="mb-3">
                <label class ="mb-2" > Фильтрация по должности:</label>
                <select name="post" class="form-control">
                 <option value >Выберите должность</option>
                 <?php foreach ($stockList as $item): ?>
                        <option <?= setSelectedOption($_GET, 'post', 'clearFilter',  $item['id']) ?> value = "<?= $item['id'] ?>"> <?= $item['denomination'] ?> </option>

                <?php endforeach ?>
                </select>
            </div>

            <div class="mb-3">
                <label class ="mb-2"> Фильтрация по имени:</label>
                <input type="text" name = "name" placeholder="Введите название" value="<?= setValue($_GET, 'name', 'clearFilter') ?>" class="form-control">
            </div>


            <div class="mb-3">
                <label class ="mb-2"> Фильтрация по характеристике:</label>
                <textarea name = "character" placeholder="Введите описание"  class="form-control" style = "height: 100px"><?=setValue($_GET, 'description', 'clearFilter') ?></textarea>
            </div>

            <input type="submit" value="Применить фильтр" class="btn btn-primary">
            <input type="submit" name="clearFilter" value="Очистить фильтр" class="btn btn-danger">
            
        </form>
    </div>

    <div class="container text-center mt-15">
    <?php if (count($electronicList) > 0): ?>
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Фото</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Дата рождения</th>
                        <th scope="col">Характеристика</th>
                        <th scope="col">Должность</th>
                    </tr>
                </thead> 
                <tbody>
                    <?php foreach ($electronicList as $item): ?>
                        <tr>
                            <th scope="row"> <img src="<?= $item['photo_path'] ?>" style="max-width : 180px" alt=""></th>
                            <td scope="col"><?= $item['name'] ?> </td>
                            <td scope="col"><?= $item['birthDate'] ?></td>
                            <td scope="col"><?= $item['character'] ?></td>
                            <td scope="col"><?= $item['stock_description'] ?></td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>           
        </table>
        <?php endif ?>
    </div>

    <?php 
    //Подключим подвал
    require_once("podval.php")
    ?>