<?php $path = "local/templates/main/"; ?>
<?php include_once 'local/templates/main/header.php'; ?>

<header class="header green-header">
    <div class="header-bg"></div>
    <div class="header-container">
        <div class="header-btns">
            <button id="hamburger-menu" class="header-btns__hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </button>

            <button class="header-btns__search">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                    <path fill-rule="evenodd" d="M8.949 0c7.135 0 10.5 8.54 5.108 13.072l3.397 4.781c.564.794-.692 1.618-1.257.825l-3.377-4.755c-5.13 2.84-11.633-.713-11.633-6.466C1.188 3.34 4.662 0 8.95 0zm4.413 3.22C9.443-.544 2.71 2.134 2.71 7.457c0 5.325 6.732 8.003 10.653 4.239 2.437-2.34 2.437-6.136 0-8.476z" />
                </svg>
                <p>Поиск</p>
            </button>
        </div>

        <div class="header-menu">
            <ul class="header-menu__container">
                <li class="header-menu__btn">
                    О компании

                    <div class="header-menu__dropdown">
                        <ul>
                            <li><a href="javascript:void(0)">История</a></li>
                            <li><a href="javascript:void(0)">Новости</a></li>
                            <li><a href="javascript:void(0)">Отзывы</a></li>
                            <li><a href="javascript:void(0)">Документы</a></li>
                            <li><a href="javascript:void(0)">Партнеры</a></li>
                            <li><a href="javascript:void(0)">Кадровая политика</a></li>
                            <li><a href="javascript:void(0)">Раскрытие информации</a></li>
                        </ul>
                    </div>
                </li>
                <li class="header-menu__btn">
                    Производство

                    <div class="header-menu__dropdown">
                        <ul>
                            <li><a href="javascript:void(0)">Завод КОММАШ</a></li>
                            <li><a href="javascript:void(0)">Технологии</a></li>
                            <li><a href="javascript:void(0)">Бизнес-система</a></li>
                        </ul>

                    </div>
                </li>

                <a href="/">
                    <img src="<?php echo $path; ?>img/logo.svg" alt="logo">
                </a>

                <li class="header-menu__btn">
                    Продукция

                    <div class="header-menu__dropdown menu-production">
                        <ul class="menu-production__list">
                            <li><a href="javascript:void(0)">Техника КОММАШ</a></li>
                            <li><a href="javascript:void(0)">Техника в наличии</a></li>
                            <li><a href="javascript:void(0)">Сравнение моделей</a></li>
                            <li><a href="javascript:void(0)">Новые разработки</a></li>
                            <li><a href="javascript:void(0)">Лизинговые программы</a></li>
                        </ul>

                        <div class="menu-production__container">
                            <div class="menu-production__column">
                                <a class="menu-production__item">
                                    <img src="<?php echo $path; ?>img/first/vkh.png" alt="vkh">
                                    Техника для ВКХ
                                </a>
                                <div class="header-menu__divider"></div>
                                <ul>
                                    <li><a href="javascript:void(0)">Каталог техники для ВКХ</a></li>
                                    <li><a href="javascript:void(0)">Подробнее</a></li>
                                    <li><a href="javascript:void(0)">Размывочные насадки</a></li>
                                </ul>
                            </div>

                            <div class="menu-production__column">
                                <a class="menu-production__item">
                                    <img src="<?php echo $path; ?>img/first/musor.png" alt="vkh">
                                    Мусоровозы
                                </a>
                                <div class="header-menu__divider"></div>
                                <ul>
                                    <li><a href="javascript:void(0)">Каталог мусоровозов</a></li>
                                    <li><a href="javascript:void(0)">Подробнее</a></li>
                                    <li><a href="javascript:void(0)">Размывочные насадки</a></li>
                                </ul>
                            </div>

                            <div class="menu-production__column">
                                <a class="menu-production__item">
                                    <img src="<?php echo $path; ?>img/first/kdm.png" alt="vkh">
                                    КДМ
                                </a>
                                <div class="header-menu__divider"></div>
                                <ul>
                                    <li><a href="javascript:void(0)">Каталог ВКХ</a></li>
                                    <li><a href="javascript:void(0)">Подробнее</a></li>
                                    <li><a href="javascript:void(0)">Опции КДМ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="header-menu__btn">
                    Сервис и запчасти

                    <div class="header-menu__dropdown">
                        <ul>
                            <li><a href="javascript:void(0)">Заказ запчастей</a></li>
                            <li><a href="javascript:void(0)">Дилеры запчастей</a></li>
                            <li><a href="javascript:void(0)">Сервисные центры</a></li>
                            <li><a href="javascript:void(0)">Условия гарантии</a></li>
                            <li>
                                <div class="header-menu__divider"></div>
                            </li>
                            <li><a href="javascript:void(0)">Заявка на гарантийный ремонт</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <div class="header-contacts">
            <a href="tel:8 800 550 16 89">8 800 550 16 89</a>
            <button class="header-contacts__btn">Все контакты</button>
        </div>
    </div>

</header>

<section class="first">

</section>

<?php include_once 'local/templates/main/footer.php'; ?>