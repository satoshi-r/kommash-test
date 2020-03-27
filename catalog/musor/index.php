<?php $path = "../../local/templates/main/"; ?>
<?php include_once $path . "header.php"; ?>

<div class="hamburger-btn-wrap">
    <input type="checkbox" id="hamburger-btn">
    <label for="hamburger-btn">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
</div>

<header class="header green-header">
    <div class="header-bg"></div>
    <div class="header-container">
        <div class="header-btn">
            <button id="search-open" class="header-btn__search">
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

                <li class="header-menu__btn active">
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
            <a href="tel:88005501689">8 800 550 16 89</a>
            <button class="header-contacts__btn">Все контакты</button>
        </div>
    </div>
</header>

<section class="head">
    <div class="head-container">
        <a href="javascript:void(0)" class="head-item">
            <img class="head-img" src="<?php echo $path; ?>img/first/vkh.png" alt="vkh">
            <div class="head-title">
                Техника для ВКХ
            </div>
        </a>
        <a href="javascript:void(0)" class="head-item active">
            <img class="head-img" src="<?php echo $path; ?>img/first/musor.png" alt="musor">
            <div class="head-title">
                Мусоровозы
            </div>
        </a>
        <a href="javascript:void(0)" class="head-item">
            <img class="head-img" src="<?php echo $path; ?>img/first/kdm.png" alt="kdm">
            <div class="head-title">
                Комбинированные
                дорожные машины
            </div>
        </a>
    </div>
</section>

<section class="catalog">
    <div class="catalog-container">
        <div class="catalog-head">
            <div class="catalog-head__title">Мусоровозы</div>
            <div class="catalog-head__row">
                <div class="catalog-head__col">
                    <div class="catalog-head__desc">
                        Предназначены для сбора твердых бытовых отходов,
                        их транспортировки и выгрузки в местах утилизации.
                    </div>
                    <a class="catalog-head__more" href="javascript:void(0)">Подробнее про мусоровозы</a>
                </div>
                <div class="catalog-head__col">
                    <img class="catalog-head__img" src="<?php echo $path; ?>img/catalog/musor.png" alt="musor">
                </div>
            </div>
        </div>

        <div class="catalog-view">
            <div class="catalog-view__title">Вид:</div>
            <form action="javascript:void(0)">
                <input type="radio" name="view" id="table-view" value="table">
                <label for="table-view">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10">
                        <path fill-rule="evenodd" d="M16 8v2H0V8h16zm0-4v2H0V4h16zm0-4v2H0V0h16z" />
                    </svg>
                    <span>таблица</span>
                </label>
                <input type="radio" name="view" id="list-view" value="list">
                <label for="list-view">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10">
                        <path fill-rule="evenodd" d="M4 8v2H0V8h4zm12 0v2H6V8h10zM4 4v2H0V4h4zm12 0v2H6V4h10zM4 0v2H0V0h4zm12 0v2H6V0h10z" />
                    </svg>
                    <span>список</span>
                </label>
                <input type="radio" name="view" id="grid-view" value="grid" checked>
                <label for="grid-view">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10">
                        <path fill-rule="evenodd" d="M4 8v2H0V8h4zm6 0v2H6V8h4zm6 0v2h-4V8h4zM4 4v2H0V4h4zm6 0v2H6V4h4zm6 0v2h-4V4h4zM4 0v2H0V0h4zm6 0v2H6V0h4zm6 0v2h-4V0h4z" />
                    </svg>
                    <span>плитка</span>
                </label>
            </form>

            <div class="catalog-print" onclick="document.print()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path d="M17 2l-.001 2H20v12.01h-3.001L17 18H3l-.001-1.99H0V4h2.999L3 2h14zM4 17h12v-5H4v5zm11-2v1H5v-1h10zm3-9H2v8.01h.999L3 11h14l-.001 3.01H18V6zm-3 7v1H5v-1h10zm1-5v1h-1V8h1zm0-5H4v1h12V3z" />
                </svg>
                <span>Версия для печати</span>
            </div>
        </div>

        <div class="catalog-wrapper">
            <div class="catalog-filter">
                <div class="catalog-filter__exist">
                    <input type="checkbox" name="filter-exist" id="filter-exist">
                    <label for="filter-exist">
                        <span class="catalog-filter__checkbox"></span>
                        <span>В наличии</span>
                    </label>
                </div>

                <div class="catalog-filter__loading">
                    <div class="catalog-filter__title">Тип загрузки</div>

                    <input type="checkbox" name="filter-loading__back" id="filter-loading__back">
                    <label for="filter-loading__back">
                        <span class="catalog-filter__checkbox"></span>
                        <span>Задняя</span>
                    </label>
                    <input type="checkbox" name="filter-loading__side" id="filter-loading__side">
                    <label for="filter-loading__side">
                        <span class="catalog-filter__checkbox"></span>
                        <span>Боковая</span>
                    </label>
                    <input type="checkbox" name="filter-loading__bunker" id="filter-loading__bunker">
                    <label for="filter-loading__bunker">
                        <span class="catalog-filter__checkbox"></span>
                        <span>Бункеровоз</span>
                    </label>
                    <input type="checkbox" name="filter-loading__kgm" id="filter-loading__kgm">
                    <label for="filter-loading__kgm">
                        <span class="catalog-filter__checkbox"></span>
                        <span>Возможность загрузки&#160;КГМ</span>
                    </label>
                </div>

                <div class="catalog-filter__mark">
                    <div class="catalog-filter__title">Марка шасси</div>

                    <input type="checkbox" name="filter-mark__kamaz" id="filter-mark__kamaz">
                    <label for="filter-mark__kamaz">
                        <span class="catalog-filter__checkbox"></span>
                        <span>КАМАЗ</span>
                    </label>
                    <input type="checkbox" name="filter-mark__maz" id="filter-mark__maz">
                    <label for="filter-mark__maz">
                        <span class="catalog-filter__checkbox"></span>
                        <span>МАЗ</span>
                    </label>
                    <input type="checkbox" name="filter-mark__gaz" id="filter-mark__gaz">
                    <label for="filter-mark__gaz">
                        <span class="catalog-filter__checkbox"></span>
                        <span>ГАЗ</span>
                    </label>
                </div>

                <div class="catalog-filter__wheels">
                    <div class="catalog-filter__title">Колесная формула</div>

                    <input type="checkbox" name="filter-wheels__1" id="filter-wheels__1">
                    <label for="filter-wheels__1">
                        <span class="catalog-filter__checkbox"></span>
                        <span>4х2</span>
                    </label>
                    <input type="checkbox" name="filter-wheels__2" id="filter-wheels__2">
                    <label for="filter-wheels__2">
                        <span class="catalog-filter__checkbox"></span>
                        <span>4х4</span>
                    </label>
                    <input type="checkbox" name="filter-wheels__3" id="filter-wheels__3">
                    <label for="filter-wheels__3">
                        <span class="catalog-filter__checkbox"></span>
                        <span>6х4</span>
                    </label>
                    <input type="checkbox" name="filter-wheels__4" id="filter-wheels__4">
                    <label for="filter-wheels__4">
                        <span class="catalog-filter__checkbox"></span>
                        <span>6х6</span>
                    </label>
                </div>

                <div class="catalog-filter__volume">
                    <div class="catalog-filter__title">Объем кузова, м³</div>

                    <input type="checkbox" name="filter-volume__1" id="filter-volume__1">
                    <label for="filter-volume__1">
                        <span class="catalog-filter__checkbox"></span>
                        <span>До 11</span>
                    </label>
                    <input type="checkbox" name="filter-volume__2" id="filter-volume__2">
                    <label for="filter-volume__2">
                        <span class="catalog-filter__checkbox"></span>
                        <span>12–18</span>
                    </label>
                    <input type="checkbox" name="filter-volume__3" id="filter-volume__3">
                    <label for="filter-volume__3">
                        <span class="catalog-filter__checkbox"></span>
                        <span>Более 19</span>
                    </label>
                </div>

                <div class="catalog-filter__amount">
                    <div class="catalog-filter__title">Количество контейнеров</div>

                    <input type="checkbox" name="filter-amount__1" id="filter-amount__1">
                    <label for="filter-amount__1">
                        <span class="catalog-filter__checkbox"></span>
                        <span>Менее 60</span>
                    </label>
                    <input type="checkbox" name="filter-amount__2" id="filter-amount__2">
                    <label for="filter-amount__2">
                        <span class="catalog-filter__checkbox"></span>
                        <span>70–80</span>
                    </label>
                    <input type="checkbox" name="filter-amount__3" id="filter-amount__3">
                    <label for="filter-amount__3">
                        <span class="catalog-filter__checkbox"></span>
                        <span>90–100</span>
                    </label>
                    <input type="checkbox" name="filter-amount__4" id="filter-amount__4">
                    <label for="filter-amount__4">
                        <span class="catalog-filter__checkbox"></span>
                        <span>Более 110</span>
                    </label>

                    <div class="catalog-filter__caption">
                        Количество контейнеров зависит от&#160;сезона и состава мусора
                    </div>
                </div>

                <div class="catalog-filter__fuel">
                    <div class="catalog-filter__title">Тип топлива</div>

                    <input type="checkbox" name="filter-fuel__diesel" id="filter-fuel__diesel">
                    <label for="filter-fuel__diesel">
                        <span class="catalog-filter__checkbox"></span>
                        <span>Дизель</span>
                    </label>
                    <input type="checkbox" name="filter-fuel__methane" id="filter-fuel__methane">
                    <label for="filter-fuel__methane">
                        <span class="catalog-filter__checkbox"></span>
                        <span>Метан</span>
                    </label>
                </div>

                <div class="catalog-filter__clear">
                    <button id="filter-clear">Очистить фильтр</button>
                </div>
            </div>

            <div class="catalog-output grid-view">
                <div class="catalog-output__head">
                    <button id="sort-model" class="catalog-output__sort">Модель</button>
                    <button id="sort-loading" class="catalog-output__sort">Загрузка</button>
                    <button id="sort-chassis" class="catalog-output__sort">Шасси</button>
                    <button id="sort-volume" class="catalog-output__sort">Объем кузова</button>
                    <button id="sort-waste" class="catalog-output__sort">Масса отходов</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                            <div class="catalog-item__badge">В наличии</div>
                            <div class="catalog-item__badge">Новинка</div>
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item1.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440В1-01</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>
                            <div class="catalog-item__desc">
                                Мусоровоз с&#160;боковой загрузкой КО-440-4М предназначен для механизированной загрузки, уплотнения,
                                транспортировки и&#160;выгрузки твёрдых бытовых отходов.
                            </div>
                        </div>
                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item1.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440В1</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>

                            <div class="catalog-item__desc">
                                Предназначен для механизированной и&#160;ручной загрузки твердых бытовых отходов, уплотнения массы,
                                транспортировки и&#160;выгрузки на&#160;мусороперегрузочных, мусоросортировочных, мусоросжигательных
                                станциях или в&#160;местах утилизации и&#160;захоронения отходов.
                            </div>
                        </div>

                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                            <div class="catalog-item__badge">Новинка</div>
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item3.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440К20</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>

                            <div class="catalog-item__desc">
                                Предназначен для механизированной загрузки, уплотнения, транспортировки и выгрузки твёрдых бытовых отходов.
                            </div>
                        </div>

                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                            <div class="catalog-item__badge">В наличии</div>
                            <div class="catalog-item__badge">Новинка</div>
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item4.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440В1-01</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>
                            <div class="catalog-item__desc">
                                Мусоровоз с&#160;боковой загрузкой КО-440-4М предназначен для механизированной загрузки, уплотнения,
                                транспортировки и&#160;выгрузки твёрдых бытовых отходов.
                            </div>
                        </div>
                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item5.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440В1</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>

                            <div class="catalog-item__desc">
                                Предназначен для механизированной и&#160;ручной загрузки твердых бытовых отходов, уплотнения массы,
                                транспортировки и&#160;выгрузки на&#160;мусороперегрузочных, мусоросортировочных, мусоросжигательных
                                станциях или в&#160;местах утилизации и&#160;захоронения отходов.
                            </div>
                        </div>

                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                            <div class="catalog-item__badge">Новинка</div>
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item6.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440К20</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>

                            <div class="catalog-item__desc">
                                Предназначен для механизированной загрузки, уплотнения, транспортировки и выгрузки твёрдых бытовых отходов.
                            </div>
                        </div>

                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                            <div class="catalog-item__badge">В наличии</div>
                            <div class="catalog-item__badge">Новинка</div>
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item7.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440В1-01</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>
                            <div class="catalog-item__desc">
                                Мусоровоз с&#160;боковой загрузкой КО-440-4М предназначен для механизированной загрузки, уплотнения,
                                транспортировки и&#160;выгрузки твёрдых бытовых отходов.
                            </div>
                        </div>
                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item8.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440В1</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>

                            <div class="catalog-item__desc">
                                Предназначен для механизированной и&#160;ручной загрузки твердых бытовых отходов, уплотнения массы,
                                транспортировки и&#160;выгрузки на&#160;мусороперегрузочных, мусоросортировочных, мусоросжигательных
                                станциях или в&#160;местах утилизации и&#160;захоронения отходов.
                            </div>
                        </div>

                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                            <div class="catalog-item__badge">Новинка</div>
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item9.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440К20</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>

                            <div class="catalog-item__desc">
                                Предназначен для механизированной загрузки, уплотнения, транспортировки и выгрузки твёрдых бытовых отходов.
                            </div>
                        </div>

                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                            <div class="catalog-item__badge">В наличии</div>
                            <div class="catalog-item__badge">Новинка</div>
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item10.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440В1-01</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>
                            <div class="catalog-item__desc">
                                Мусоровоз с&#160;боковой загрузкой КО-440-4М предназначен для механизированной загрузки, уплотнения,
                                транспортировки и&#160;выгрузки твёрдых бытовых отходов.
                            </div>
                        </div>
                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item11.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440В1</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>

                            <div class="catalog-item__desc">
                                Предназначен для механизированной и&#160;ручной загрузки твердых бытовых отходов, уплотнения массы,
                                транспортировки и&#160;выгрузки на&#160;мусороперегрузочных, мусоросортировочных, мусоросжигательных
                                станциях или в&#160;местах утилизации и&#160;захоронения отходов.
                            </div>
                        </div>

                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                            <div class="catalog-item__badge">Новинка</div>
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item12.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440К20</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>

                            <div class="catalog-item__desc">
                                Предназначен для механизированной загрузки, уплотнения, транспортировки и выгрузки твёрдых бытовых отходов.
                            </div>
                        </div>

                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                            <div class="catalog-item__badge">В наличии</div>
                            <div class="catalog-item__badge">Новинка</div>
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item13.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440В1-01</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>
                            <div class="catalog-item__desc">
                                Мусоровоз с&#160;боковой загрузкой КО-440-4М предназначен для механизированной загрузки, уплотнения,
                                транспортировки и&#160;выгрузки твёрдых бытовых отходов.
                            </div>
                        </div>
                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item14.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440В1</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>

                            <div class="catalog-item__desc">
                                Предназначен для механизированной и&#160;ручной загрузки твердых бытовых отходов, уплотнения массы,
                                транспортировки и&#160;выгрузки на&#160;мусороперегрузочных, мусоросортировочных, мусоросжигательных
                                станциях или в&#160;местах утилизации и&#160;захоронения отходов.
                            </div>
                        </div>

                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                            <div class="catalog-item__badge">Новинка</div>
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item15.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440К20</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>

                            <div class="catalog-item__desc">
                                Предназначен для механизированной загрузки, уплотнения, транспортировки и выгрузки твёрдых бытовых отходов.
                            </div>
                        </div>

                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                            <div class="catalog-item__badge">В наличии</div>
                            <div class="catalog-item__badge">Новинка</div>
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item16.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440В1-01</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>
                            <div class="catalog-item__desc">
                                Мусоровоз с&#160;боковой загрузкой КО-440-4М предназначен для механизированной загрузки, уплотнения,
                                транспортировки и&#160;выгрузки твёрдых бытовых отходов.
                            </div>
                        </div>
                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item1.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440В1</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>

                            <div class="catalog-item__desc">
                                Предназначен для механизированной и&#160;ручной загрузки твердых бытовых отходов, уплотнения массы,
                                транспортировки и&#160;выгрузки на&#160;мусороперегрузочных, мусоросортировочных, мусоросжигательных
                                станциях или в&#160;местах утилизации и&#160;захоронения отходов.
                            </div>
                        </div>

                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                            <div class="catalog-item__badge">Новинка</div>
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item3.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440К20</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>

                            <div class="catalog-item__desc">
                                Предназначен для механизированной загрузки, уплотнения, транспортировки и выгрузки твёрдых бытовых отходов.
                            </div>
                        </div>

                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                            <div class="catalog-item__badge">В наличии</div>
                            <div class="catalog-item__badge">Новинка</div>
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item1.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440В1-01</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>
                            <div class="catalog-item__desc">
                                Мусоровоз с&#160;боковой загрузкой КО-440-4М предназначен для механизированной загрузки, уплотнения,
                                транспортировки и&#160;выгрузки твёрдых бытовых отходов.
                            </div>
                        </div>
                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item1.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440В1</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>

                            <div class="catalog-item__desc">
                                Предназначен для механизированной и&#160;ручной загрузки твердых бытовых отходов, уплотнения массы,
                                транспортировки и&#160;выгрузки на&#160;мусороперегрузочных, мусоросортировочных, мусоросжигательных
                                станциях или в&#160;местах утилизации и&#160;захоронения отходов.
                            </div>
                        </div>

                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-item">
                    <a href="javascript:void(0)">
                        <div class="catalog-item__badges">
                            <div class="catalog-item__badge">Новинка</div>
                        </div>

                        <div>
                            <img src="<?php echo $path; ?>img/catalog/catalog-item3.jpg" alt="item">
                        </div>

                        <div class="catalog-item__text">
                            <div class="catalog-item__model">КО-440К20</div>
                            <div class="catalog-item__specifications">
                                <div class="catalog-item__property-list">Загрузка</div>
                                <div class="catalog-item__property">Тип загрузки</div>
                                <div class="catalog-item__value">Задняя</div>

                                <div class="catalog-item__property-list">Объем</div>
                                <div class="catalog-item__property">Объем кузова</div>
                                <div class="catalog-item__value">22 м³</div>

                                <div class="catalog-item__property-list">Шасси</div>
                                <div class="catalog-item__property">Марка шасси</div>
                                <div class="catalog-item__value">КАМАЗ</div>

                                <div class="catalog-item__value">5375 кг</div>
                            </div>

                            <div class="catalog-item__desc">
                                Предназначен для механизированной загрузки, уплотнения, транспортировки и выгрузки твёрдых бытовых отходов.
                            </div>
                        </div>

                    </a>

                    <button class="catalog-item__btn"><img src="<?php echo $path; ?>img/icons/compare.svg" alt="compare"> Сравнить</button>
                </div>

                <div class="catalog-output__more">
                    <button class="btn transparent-btn">Показать ещё</button>
                </div>
            </div>
        </div>

    </div>

    <div class="catalog-description">
        <div class="catalog-description__title">Мусоровозы</div>
        <div class="catalog-description__text">
            <p>
                Вакуумные машины предназначены для вакуумной очистки выгребных ям и канализационных колодцев,
                транспортирования и выгрузки в местах утилизации жидких отходов, не содержащих горючих и взрывоопасных веществ.
            </p>
            <p>
                В состав оборудования входят: цистерна, вакуум-насос с приводом, трубопровод с четырехходовым краном,
                сигнально-предохранительное устройство, приемный лючок с всасывающим шлангом, электрооборудование.
            </p>
            <p>
                Заполнение цистерн(ы) осуществляется вакуумным насосом. Опорожнение цистерны осуществляется вакуумным насосом или самотёком.
            </p>
            <p>
                Основные преимущества вакуумных машин: экологическая чистота; высокое качество очистки; простота в эксплуатации;
                надежная работа вакуумного насоса; всесезонная эксплуатация от минус 20 °С до плюс 40 °С.
            </p>

            <div class="catalog-description__shadow"></div>
        </div>
        <button class="catalog-description__btn">Подробнее</button>
    </div>

    <div class="catalog-exist">
        <div class="catalog-exist__title">
            Техника в наличии
        </div>

        <div class="catalog-exist__text">
            Если Вам нужна техника здесь и&#160;сейчас,
            Вы&#160;можете заказать её&#160;со&#160;склада. Завод КОММАШ быстро доставит уже готовые модели.
        </div>

        <div class="catalog-exist__btn">
            <a href="javascript:void(0)" class="btn">Заказать</a>
        </div>

    </div>
</section>

<footer class="footer green-footer">
    <div class="footer-group">
        <span>© АО «КОММАШ», 2019</span>
        <a href="javascript:void(0)">Политика конфиденциальности</a>
    </div>
    <div class="footer-group">
        <span>Россия, г. Нижний Новгород, ул. Деловая, 5, а/я 50</span>
        <a href="mailto:info@kommash.ru">info@kommash.ru</a>
    </div>
    <div class="footer-group">
        <span>Сделано в «Воздухе»</span>
    </div>
</footer>

<!-- search -->
<div class="header-search">
    <button id="search-close" class="header-search__close">
        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
            <g id="Makets" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Group-18">
                    <g id="svg-close">
                        <path id="Path" d="M.686 21.9L21.9.685 23.315 2.1 2.1 23.314z" />
                        <path id="Path" d="M2.1.686L23.315 21.9 21.9 23.315.686 2.1z" />
                    </g>
                </g>
            </g>
        </svg>
    </button>

    <form action="javascript:void(0)" id="header-search">
        <input type="text" name="search" id="header-search__input" placeholder="Поиск по сайту">
        <img src="<?php echo $path; ?>img/icons/search.svg" alt="search">
    </form>
</div>
<!-- end search -->

<!-- hamburger -->
<div class="hamburger">
    <div class="hamburger-container">
        <div class="hamburger-column fadeInUp">
            <div class="hamburger-title">О компании</div>
            <ul class="hamburger-list">
                <li><a href="javascript:void(0)">История</a></li>
                <li class="accordeon-item">
                    <a href="javascript:void(0)" class="hamburger-accordeon">Новости</a>
                    <ul class="hamburger-accordeon__list">
                        <li><a href="javascript:void(0)">События</a></li>
                        <li><a href="javascript:void(0)">Публикации</a></li>
                        <li><a href="javascript:void(0)">Новости компании</a></li>
                    </ul>
                </li>
                <li class="accordeon-item">
                    <a href="javascript:void(0)" class="hamburger-accordeon">Отзывы</a>
                    <ul class="hamburger-accordeon__list">
                        <li><a href="javascript:void(0)">О технике</a></li>
                        <li><a href="javascript:void(0)">О компании</a></li>
                    </ul>
                </li>
                <li class="accordeon-item">
                    <a href="javascript:void(0)" class="hamburger-accordeon">Документы</a>
                    <ul class="hamburger-accordeon__list">
                        <li><a href="javascript:void(0)">Дипломы</a></li>
                        <li><a href="javascript:void(0)">Сертификаты</a></li>
                        <li><a href="javascript:void(0)">Благодарности</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)">Кадровая политика</a></li>
                <li><a href="javascript:void(0)">Раскрытие информации</a></li>
            </ul>
        </div>
        <div class="hamburger-column fadeInUp">
            <div class="hamburger-title">Производство</div>
            <ul class="hamburger-list">
                <li><a href="javascript:void(0)">Завод КОММАШ</a></li>
                <li><a href="javascript:void(0)">Технологии</a></li>
                <li><a href="javascript:void(0)">Бизнес-система</a></li>
            </ul>
            <div class="hamburger-title">Сервис и&#160;запчасти</div>
            <ul class="hamburger-list">
                <li><a href="javascript:void(0)">Заказ запчастей</a></li>
                <li><a href="javascript:void(0)">Дилеры запчастей</a></li>
                <li><a href="javascript:void(0)">Сервисные центры</a></li>
                <li><a href="javascript:void(0)">Условия гарантии</a></li>
            </ul>
            <div class="hamburger-divider"></div>
            <a href="javascipt:void(0)" class="hamburger-request-btn">Заявка на&#160;гарантийный ремонт</a>
        </div>
        <div class="hamburger-column hamburger-column-prod fadeInUp">
            <div class="hamburger-title">Продукция</div>
            <ul class="hamburger-list">
                <li><a href="javascript:void(0)">Техника КОММАШ</a></li>
                <li><a href="javascript:void(0)">Сравнение моделей</a></li>
                <li><a href="javascript:void(0)">Лизинговые программы</a></li>
                <li><a href="javascript:void(0)">Техника в наличии</a></li>
                <li><a href="javascript:void(0)">Новые разработки</a></li>
            </ul>
            <div class="hamburger-divider"></div>
            <div class="hamburger-section">
                <a href="javascript:void(0)" class="hamburger-section__left">
                    <img src="<?php echo $path; ?>img/first/vkh.png" alt="vkh">
                    Техника для ВКХ
                </a>
                <div class="hamburger-section__right">
                    <a href="javascript:void(0)">Подробнее про технику для ВКХ</a>
                    <a href="javascript:void(0)">Размывочные насадки</a>
                </div>
            </div>
            <div class="hamburger-divider"></div>
            <div class="hamburger-section">
                <a href="javascript:void(0)" class="hamburger-section__left">
                    <img src="<?php echo $path; ?>img/first/musor.png" alt="musor">
                    Мусоровозы
                </a>
                <div class="hamburger-section__right">
                    <a href="javascript:void(0)">Подробнее про мусоровозы</a>
                </div>
            </div>
            <div class="hamburger-divider"></div>
            <div class="hamburger-section">
                <a href="javascript:void(0)" class="hamburger-section__left">
                    <img src="<?php echo $path; ?>img/first/kdm.png" alt="kdm">
                    Комбинированные дорожные машины
                </a>
                <div class="hamburger-section__right">
                    <a href="javascript:void(0)">Подробнее про КДМ</a>
                    <a href="javascript:void(0)">Опции КДМ</a>
                </div>
            </div>
        </div>
        <div class="hamburger-column hamburger-column-contacts fadeInUp">
            <div class="hamburger-title">Контакты</div>
            <a href="tel:88005501689" class="hamburger-tel">8 800 550 16 89</a>
            <div class="hamburger-tel__caption">Звонок бесплатный</div>
            <div class="hamburger-divider"></div>
            <ul class="hamburger-list">
                <li><a href="javascript:void(0)">Контактная информация</a></li>
                <li><a href="javascript:void(0)">Как добраться</a></li>
                <li><a href="javascript:void(0)">Обратная связь</a></li>
            </ul>
            <div class="hamburger-divider"></div>
            <a class="hamburger-mail">Написать письмо</a>
            <div class="hamburger-divider"></div>
            <div class="hamburger-social">
                <div class="hamburger-social__caption">Мы в соцсетях:</div>
                <div class="hamburger-social__icons">
                    <a href="javascript:void(0)"><img src="<?php echo $path; ?>img/icons/vk.svg" alt="vk"></a>
                    <a href="javascript:void(0)"><img src="<?php echo $path; ?>img/icons/instagram.svg" alt="instagram"></a>
                    <a href="javascript:void(0)"><img src="<?php echo $path; ?>img/icons/youtube.svg" alt="youtube"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end hamburger -->

<!-- contacts -->
<div class="contacts">
    <div class="contacts-tel">
        <a href="tel:88005501689">8 800 550 16 89</a>
        <div class="contacts-tel__caption">Звонок бесплатный</div>
    </div>
    <div class="contacts-divider"></div>
    <ul class="contacts-list">
        <li><a href="javascript:void(0)">Контактная информация</a></li>
        <li><a href="javascript:void(0)">Как добраться</a></li>
        <li><a href="javascript:void(0)">Обратная связь</a></li>
    </ul>
    <div class="contacts-divider"></div>
    <div class="contacts-mail__wrap">
        <a class="contacts-mail">Написать письмо</a>
    </div>
    <div class="contacts-divider"></div>
    <div class="contacts-social">
        <div>Мы в соцсетях:</div>
        <div class="contacts-social__icons">
            <a href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                    <g fill="none" fill-rule="evenodd">
                        <path class="stroke" stroke-linecap="square" d="M8.237 2h5.526C18.806 2 20 3.194 20 8.237v5.526C20 18.806 18.806 20 13.763 20H8.237C3.194 20 2 18.806 2 13.763V8.237C2 3.194 3.194 2 8.237 2" />
                        <path class="fill" d="M16.868 8.21c.091-.297 0-.512-.404-.512H15.12c-.339 0-.495.188-.587.39 0 0-.691 1.727-1.656 2.846-.313.324-.457.432-.626.432-.092 0-.209-.108-.209-.405V8.197c0-.351-.104-.513-.391-.513H9.538a.329.329 0 0 0-.34.324c0 .337.483.418.535 1.362v2.05c0 .445-.078.526-.247.526-.457 0-1.566-1.74-2.23-3.722-.131-.391-.262-.54-.6-.54H5.298c-.392 0-.457.189-.457.391 0 .364.457 2.198 2.126 4.626 1.109 1.659 2.687 2.549 4.109 2.549.86 0 .965-.203.965-.54v-1.254c0-.404.078-.472.352-.472.196 0 .548.108 1.344.904.913.944 1.07 1.375 1.578 1.375h1.343c.392 0 .574-.202.47-.593-.117-.391-.56-.958-1.135-1.632-.313-.378-.782-.796-.926-.998-.196-.27-.143-.378 0-.62-.013 0 1.63-2.4 1.8-3.21" />
                    </g>
                </svg>
            </a>
            <a href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                    <g fill="none" fill-rule="evenodd">
                        <path class="stroke" stroke-linecap="square" d="M11.01 15.284a4.274 4.274 0 1 1 .001-8.548 4.274 4.274 0 0 1 0 8.548z" />
                        <path class="fill" d="M17.246 4.886a.991.991 0 1 1-1.982 0 .991.991 0 0 1 1.982 0" />
                        <path class="stroke" stroke-linecap="square" d="M15.728 20H6.273A4.272 4.272 0 0 1 2 15.728V6.272A4.272 4.272 0 0 1 6.273 2h9.455A4.272 4.272 0 0 1 20 6.272v9.456A4.272 4.272 0 0 1 15.728 20z" />
                    </g>
                </svg>

            </a>
            <a href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                    <g fill="none" fill-rule="evenodd">
                        <path class="stroke" stroke-linecap="square" d="M20.358 5.806a2.51 2.51 0 0 0-1.748-1.795c-1.542-.424-7.724-.424-7.724-.424s-6.183 0-7.725.424a2.51 2.51 0 0 0-1.748 1.795C1 7.389 1 10.692 1 10.692s0 3.303.413 4.886a2.51 2.51 0 0 0 1.748 1.795c1.542.424 7.725.424 7.725.424s6.182 0 7.724-.424a2.51 2.51 0 0 0 1.748-1.795c.413-1.583.413-4.886.413-4.886s0-3.303-.413-4.886" />
                        <path class="fill" d="M9 13.587v-5l5 2.5z" />
                    </g>
                </svg>
            </a>
        </div>
    </div>
</div>
<!-- end contacts -->

<?php include_once $path . "footer.php";
