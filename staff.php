<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/forWeb/logic.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/LR2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/LR2/style.css" rel="stylesheet" />
</head>

<body>

    <header class="header position-fixed">

        <div class="container-wrapper bg-dark">
            <div class="container">
                <div class="row additional-header">
                    <div class="navbar navbar-expand col-6" style="height: 100%">
                        <ul
                            class="region-navbar additional-header-navbar navbar-nav text-white d-flex align-items-center">
                            <li class="nav-item"><a href="" class="nav-link text-white">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path
                                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                    Москва</a></li>
                            <li class="nav-item"><a href="" class="nav-link text-white">Магазин</a></li>
                            <li class="nav-item"><a href="" class="nav-link text-white">Доставка</a></li>
                        </ul>
                    </div>

                    <div class="navbar navbar-expand col-6 d-flex justify-content-end" style="height: 100%">
                        <ul
                            class="region-navbar additional-header-navbar navbar-nav text-white d-flex align-items-center">
                            <li class="nav-item"><a href="" class="nav-link text-white">Блог «М.Клик»</a></li>
                            <li class="nav-item"><a href="" class="nav-link text-white">M.Club</a></li>
                            <li class="nav-item"><a href="" class="nav-link text-white">Для бизнеса</a></li>
                            <li class="nav-item"><a href="" class="nav-link text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path
                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg> 8-800-600-7775</a></li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>


        <div class="container header-container">
            <div class="row justify-content-center align-items-center">
                <div class="logotype col-1">
                    <div class="logo-svg">
                        <img src="https://cms.mvideo.ru/magnoliaPublic/dam/jcr:6c33dfce-6106-48c9-9101-8dadbfea21fd"
                            class="img-fluid" alt="">
                    </div>
                </div>

                <!-- <div class="col-1">
                    <button class="catalog-button  btn btn-outline-danger">Каталог</button>
                </div> -->

                <div class="col-1">
                    <div class="dropdown">
                        <a class="btn btn catalog-button btn-danger dropdown-toggle" href="#" role="button"
                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Каталог
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Акции, скидки</a>
                            <a class="dropdown-item" href="#">Смартфоны и гаджеты</a>
                            <a class="dropdown-item" href="#">Ноутбуки и компьютеры</a>
                            <a class="dropdown-item" href="#">Телевизоры и цифровое</a>
                        </div>
                    </div>
                </div>

                <!-- Search -->
                <div class="col-6">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Искать королевские подарки"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="button" class="btn btn-outline-danger search-button">Поиск</button>
                    </div>
                </div>
                <!-- Search -->

                <nav class="navbar col-4 navbar-expand ">
                    <div class="navbar-collapse d-flex justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="https://getbootstrap.com/docs/4.0/components/navbar/" class="nav-link">Статус
                                    Заказа</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Войти</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Сравнение</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Избранное</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Корзина</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        <div class="bottom-header container">
            <div class="row">
                <div class="navbar navbar-expand " style="height: 100%">
                    <ul class=" bottom-header navbar-nav text-white overflow-hidden d-flex justify-content-center"
                        style="width: 200;">
                        <li class="nav-item"><a href="" class="nav-link text-black">ВСЕ АКЦИИ</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-black">СКИДКИ НА ПОДАРКИ</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-black">PREMIUM</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-black">ТЕЛЕВИЗОРЫ</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-black">SAMSUNG 23</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-black">НОУТБУКИ</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-black">ЭКСПРЕСС-ДОСТАВКА</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-black">ГАРАНТИЯ ЛУЧШЕЙ ЦЕНЫ</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-black">СТИРАЛЬНЫЕ МАШИНЫ</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-black">ТЕЛЕВИЗОРЫ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- без js  -->
    <div class="tmp" style="height: 110px;"></div>

    <div class="product-container container mt-5">

        <div class="row">
            <ul class="d-flex col-4 justify-content-between" style="font-size: .8rem;" >
                <li class="list-group-item"><a href="" class="nav-link">Главная</a></li>
                <span>—</span>
                <li class="list-group-item"><a href="" class="nav-link">Компьютерная Техника</a></li>
                <span>—</span>
                <li class="list-group-item"><a href="" class="nav-link">Моноблоки</a></li>
                <span>—</span>
                <li class="list-group-item"><a href="" class="nav-link">Apple iMac</a></li>
                <span>—</span>
                <li class="list-group-item"><a href="" class="nav-link">Apple</a></li>
            </ul>
        </div>
        <div class="row align-items-center">
            <div class="product-information col-4">

                <div class="row">
                    <div class="col-3">
                        <div class="product-image">
                            <img src="image/30051828b.webp" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="product-name col" style="font-size: .9rem;">
                        <b> Моноблок Apple iMac 27 i7 3,8/128/4T SSD/RP5500XT (Z0ZX) </b>
                    </div>
                </div>
            </div>


            <nav class="product-nav navbar navbar-expand col-5 justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="" class="nav-link product-nav-link" style="font-size: .9rem;">О
                            товаре</a></li>
                    <li class="nav-item"><a href="" class="nav-link product-nav-link"
                            style="font-size: .9rem;">Характеристики</a></li>
                    <li class="nav-item"><a href="" class="nav-link product-nav-link"
                            style="font-size: .9rem;">Отзывы</a></li>
                </ul>
            </nav>


            <div class="product-manage col-3 d-flex justify-content-end ">
                <button type="button" class="btn btn-outline-danger">Посмотреть аналоги</button>
            </div>
        </div>
        <hr>
    </div>

    <div class="container text-center">
        <form action="staff.php" method = "get">
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

    <div class="container text-center mt-5">
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




    <footer class="footer container-fluid bg-dark text-center text-white pt-4 pb-4 mt-4">

        <div class="container">
            <div class="row">
                <div class="footer-logo col d-flex justify-content-start">
                    <div class="wrap d-flex justify-content-center " style="width: 100px; height: 40px;">
                        <img src="https://cms.mvideo.ru/magnoliaPublic/dam/jcr:669781ab-9d44-4162-ae02-ac3eb862e1b9"
                            alt="">
                    </div>
                </div>
                <div class="button-wrapper col d-flex justify-content-end">
                    <button type="button" class="btn btn-secondary">Карта магазинов</button>
                </div>

            </div>
        </div>


        <div class="container">
            <hr class="bg-grey">
            <div class="link-container row text-start">
                <div class="footer-link-col col">
                    <h5><a href="#" class="text-white">Покупателям</a></h5>

                    <ul class="link-list navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link">Каталог</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Частые вопросы</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Акции и скидки</a></li>
                        <li class="nav-item"><a href="" class="nav-link">M.Club – кэшбек и Бонусные рубли</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Доставка</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Обмен и возврат</a></li>
                        <li class="nav-item"><a href="" class="nav-link">М.Сервис – ремонт, страховка</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Кредит и рассрочка</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Подарочные карты</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Заберите товар через 15 минут после
                                заказа</a>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link">Гарантия лучшей цены</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Хранение покупок</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Публичная оферта</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Безопасность в Интернете</a></li>
                    </ul>
                </div>


                <div class="footer-link-col col">
                    <h5><a href="#" class="text-white">Бизнесу</a></h5>

                    <ul class="link-list navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link">Техника для вашей компании</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Тендеры</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Поставщикам</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Арендуем помещения под магазины</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Электронный документооборот</a></li>
                        <li class="nav-item"><a href="" class="nav-link">For international suppliers</a></li>
                    </ul>
                </div>


                <div class="footer-link-col col">
                    <h5><a href="#" class="text-white">О компании</a></h5>

                    <ul class="link-list navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link"> Про М.Видео</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Пресс-центр</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Благотворительный фонд</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Партнёрская программа</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Инвесторам и акционерам</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Политика компании</a></li>
                    </ul>
                </div>

                <div class="footer-link-col col">
                    <h5><a href="#" class="text-white">Блог</a></h5>

                    <ul class="link-list navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link">Как установить «Сбербанк Онлайн» и
                                приложения
                                других банков на iPhone</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Тестируем iPhone 14 Pro Max: эволюция с
                                элементами
                                революции</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Топ-36 интересных фильмов на вечер</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Чем iPhone 14 отличается от iPhone 13?
                                Сравниваем
                                обычные и Pro-версии</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Samsung представила новые смартфоны
                                Galaxy</a>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link">Что подарить мужчине на 23 Февраля: 40+
                                идей</a>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link">«Ты узнаешь ее из тысячи»: 10 случаев,
                                когда
                                саундтрек стал известнее самого фильма</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Какую блинницу выбрать для дома
                            </a></li>
                        <li class="nav-item"><a href="" class="nav-link">Blackview представила защищенный смартфон с
                                батареей 13 000 мА·ч</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-link-col col">
                    <h5><a href="#" class="text-white">Обратная связь</a></h5>

                    <ul class="link-list navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link"> КОНТАКТЫ</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Канал Viber</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Telegram</a></li>
                    </ul>
                </div>

            </div>

            <hr class="bg-grey">

            <div class="row copyright-text-wrapper">
                <div class="copyright-text col-2">Copyright М.Видео</div>
            </div>

            <div class="hz-kak-nazvat-pust-eto-ssilka row pt-2">
                <a href="" class="last-footer-link col-2 nav-link">Официальная информация</a>
                <a href="" class="last-footer-link col-2 nav-link">Раскрытие информации</a>
            </div>

        </div>
    </footer>


    <script src="/LR2/popper.min.js">
    </script>
    <script src="/LR2/bootstrap.min.js"></script>

    <script src="/LR2/js/bootstrap.min.js"></script>
</body>

</html>