<?php $path = "../local/templates/main/"; ?>
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

<div class="product-head"></div>

<div class="product-wrapper">
    <div class="product">
        <div class="product-main">


            <div class="product-path">
                <a href="../catalog/">Вся продукция</a>
                <img src="<?php echo $path; ?>img/icons/light.svg" alt=">">
                <a href="../catalog/">Мусоровозы</a>
            </div>

            <div class="product-print">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path d="M17 2l-.001 2H20v12.01h-3.001L17 18H3l-.001-1.99H0V4h2.999L3 2h14zM4 17h12v-5H4v5zm11-2v1H5v-1h10zm3-9H2v8.01h.999L3 11h14l-.001 3.01H18V6zm-3 7v1H5v-1h10zm1-5v1h-1V8h1zm0-5H4v1h12V3z" />
                </svg>
            </div>

            <h1 class="product-title">Мусоровоз с задней загрузкой КО-440В1-01</h1>

            <div class="slider">
                <div class="slider-item">
                    <img src="<?php echo $path; ?>img/product/slider1.jpg" alt="slider">
                </div>
                <div class="slider-item">
                    <img src="<?php echo $path; ?>img/product/slider2.jpg" alt="slider">
                </div>
                <div class="slider-item">
                    <img src="<?php echo $path; ?>img/product/slider3.jpg" alt="slider">
                </div>
                <div class="slider-item">
                    <img src="<?php echo $path; ?>img/product/slider4.jpg" alt="slider">
                </div>
            </div>

            <div class="slider-thumb">
                <div class="slider-thumb-item">
                    <img src="<?php echo $path; ?>img/product/slider_thumb1.jpg" alt="thumb">
                </div>
                <div class="slider-thumb-item">
                    <img src="<?php echo $path; ?>img/product/slider_thumb2.jpg" alt="thumb">
                </div>
                <div class="slider-thumb-item">
                    <img src="<?php echo $path; ?>img/product/slider_thumb3.jpg" alt="thumb">
                </div>
                <div class="slider-thumb-item">
                    <img src="<?php echo $path; ?>img/product/slider_thumb4.jpg" alt="thumb">
                </div>
            </div>

            <div class="product-badge__wrap">
                <div class="product-badge">Новинка</div>
                <div class="product-badge">Лидер продаж</div>
                <div class="product-badge">Выбор эксплуатанта 2018</div>
            </div>

            <div class="product-btns">
                <button class="product-btns__compare">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 13v2H0v-2h5zm7 0v2H7v-2h5zm6-9v2h2v2h-2v2h-2V8h-2V6h2V4h2zM5 8v2H0V8h5zm7 0v2H7V8h5zM5 3v2H0V3h5zm7 0v2H7V3h5z" />
                    </svg>
                    Добавить к сравнению
                </button>
                <button class="product-btns__order btn">Заказать</button>
                <a href="javascript:void(0)" class="product-btns__leasing">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M15.432 1l1.964 3H20v14H0V4h4.487l10.945-3zM18 6H2v10h16v-2h-6V8h6V6zm0 3h-5v4h5V9zm-1 1v2h-1v-2h1zm-1.944-7.795L8.507 4h7.724l-1.175-1.795z" />
                    </svg>
                    Рассчитать в лизинг
                </a>
            </div>

            <div class="product-extra">Возможно установить на шасси марок: DAF, SCANIA, MAN</div>

            <!-- modal -->
            <div id="product-modal" class="product-modal">
                <button id="product-modal-close" class="product-modal__close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37">
                        <g fill="none" fill-rule="evenodd" stroke-width="2">
                            <circle cx="18.5" cy="18.5" r="17.5" />
                            <g stroke-linecap="square">
                                <path d="M12.5 0.5L0.458 12.542" transform="translate(12 12)" />
                                <path d="M12.5 0.5L0.458 12.542" transform="translate(12 12) matrix(-1 0 0 1 13 0)" />
                            </g>
                        </g>
                    </svg>
                </button>

                <div class="product-modal__container">
                    <div class="product-modal__title">
                        Запрос на технику
                    </div>

                    <form action="../mail.php" method="POST">
                        <label for="p_name" class="input">
                            <input name="p_name" type="text" id="p_name" placeholder="&nbsp;">
                            <span class="label">Ваше Имя</span>
                            <span class="border"></span>
                            <div class="error_message"></div>
                        </label>

                        <label for="p_email" class="input">
                            <input name="p_email" type="email" id="p_email" placeholder="&nbsp;">
                            <span class="label">Эл.почта</span>
                            <span class="border"></span>
                            <div class="error_message"></div>
                        </label>

                        <label for="p_tel" class="input">
                            <input name="p_tel" type="tel" id="p_tel" placeholder="&nbsp;">
                            <span class="label">Телефон</span>
                            <span class="border"></span>
                            <div class="error_message"></div>
                        </label>

                        <label for="p_company" class="input">
                            <input name="p_company" type="text" id="p_company" placeholder="&nbsp;">
                            <span class="label">Компания</span>
                            <span class="border"></span>
                            <div class="error_message"></div>
                        </label>

                        <label for="p_region" class="input">
                            <input name="p_region" type="text" id="p_region" placeholder="&nbsp;">
                            <span class="label">Регион</span>
                            <span class="border"></span>
                            <div class="error_message"></div>
                        </label>

                        <button type="submit" class="btn product-modal__submit">Отправить</button>
                        <div class="product-modal__agreement">
                            Нажимая на кнопку, вы даете согласие на обработку своих персональных данных
                            и соглашаетесь с <a href="javascript:void(0)">политикой конфиденциальности</a>.
                        </div>
                    </form>

                    <div class="product-modal-success">
                        <img src="<?php echo $path; ?>img/icons/checked.svg" alt="check">
                        <div class="product-modal-success__title">Отправлено !</div>
                        <p class="product-modal-success__caption">Когда-нибудь с Вами свяжутся.</p>
                    </div>
                </div>

            </div>
            <!-- end modal -->
        </div>

        <div class="product-info">
            <div class="product-tabs">
                <button class="focus product-tabs__item">Характеристики</button>
                <button class="product-tabs__item">Описание</button>
                <button class="product-tabs__item">Отзывы</button>
                <button class="product-tabs__item">Документы</button>
            </div>

            <div class="product-output">
                <div class="tab-content product-characteristics fade">
                    <div class="product-characteristics__row">
                        <div class="product-characteristics__item">
                            <div class="product-characteristics__property">
                                <span>Базовое шасси</span>
                            </div>
                            <div class="product-characteristics__value">КамАЗ-65115</div>
                        </div>
                        <div class="product-characteristics__item">
                            <div class="product-characteristics__property">
                                <span>Тип топлива</span>
                            </div>
                            <div class="product-characteristics__value">Дизель</div>
                        </div>
                        <div class="product-characteristics__item">
                            <div class="product-characteristics__property">
                                <span>Объем кузова</span>
                            </div>
                            <div class="product-characteristics__value">22/18 м³</div>
                        </div>
                        <div class="product-characteristics__item">
                            <div class="product-characteristics__property">
                                <span>Масса загружаемых отходов до</span>
                            </div>
                            <div class="product-characteristics__value">11 120 кг</div>
                        </div>
                        <div class="product-characteristics__item">
                            <div class="product-characteristics__property">
                                <span>Коэффициент уплотнения мусора</span>
                            </div>
                            <div class="product-characteristics__value">2,5—7</div>
                        </div>
                    </div>
                    <div class="product-characteristics__divider"></div>
                    <div class="product-characteristics__row">
                        <div class="product-characteristics__item">
                            <div class="product-characteristics__property">
                                <span>Грузоподъемность манипулятора</span>
                            </div>
                            <div class="product-characteristics__value small">800 кг</div>
                        </div>
                        <div class="product-characteristics__item">
                            <div class="product-characteristics__property">
                                <span>Грузоподъемность портального захвата (опционально)</span>
                            </div>
                            <div class="product-characteristics__value small">3000 кг</div>
                        </div>
                        <div class="product-characteristics__item">
                            <div class="product-characteristics__property">
                                <span>Емкость загрузочного ковша</span>
                            </div>
                            <div class="product-characteristics__value small">2 м³</div>
                        </div>
                        <div class="product-characteristics__item">
                            <div class="product-characteristics__property">
                                <span>Количество загружаемых евроконтейнеров 1,1 м³</span>
                            </div>
                            <div class="product-characteristics__value small">100 шт.</div>
                        </div>
                        <div class="product-characteristics__item">
                            <div class="product-characteristics__property">
                                <span>Полная масса</span>
                            </div>
                            <div class="product-characteristics__value small">25 200 кг</div>
                        </div>
                        <div class="product-characteristics__item">
                            <div class="product-characteristics__property">
                                <span>Габаритные размеры (Д×Ш×В)</span>
                            </div>
                            <div class="product-characteristics__value small">9200×2550×3750 мм</div>
                        </div>
                    </div>
                    <ul class="product-characteristics__list">
                        <li>Принципиально новая конструкция заднего борта</li>
                        <li>Загрузка КГМ контейнером-лодочкой до 8 м³</li>
                        <li>Работа в любое время суток</li>
                        <li>Принципиально новая конструкция заднего борта</li>
                    </ul>
                </div>

                <div class="tab-content product-caption fade">
                    <p>
                        Мусоровоз с задней загрузкой КО-440В1-01 предназначен для механизированного сбора твердых бытовых
                        отходов из металлических и пластмассовых евроконтейнеров всех типов вместимостью до 1,1 м³, их уплотнения,
                        транспортирования, и механизированной выгрузки в местах утилизации.
                        Спецоборудование состоит из основных частей: кузов, задний борт, плита выталкивающая, опрокидыватель,
                        гидравлическая и электрическая системы.
                        Уплотнение отходов осуществляется при помощи прессующей и выталкивающей плит. Выгрузка отходов осуществляется
                        поднятием заднего борта и выталкивающей плитой.
                    </p>

                    <h2>Особенности</h2>

                    <ul>
                        <li>высокая степень уплотнения мусора</li>
                        <li>работа прессующего механизма в автоматическом, полуавтоматическом и ручном режиме</li>
                        <li>материал ковша — низколегированная конструкционная сталь 09Г2С</li>
                        <li>высококачественная гидравлика и высокопрочные металлорукава высокого давления, соответствующие европейским стандартам</li>
                        <li>безопасная работа в зоне загрузки мусора</li>
                        <li>современный европейский дизайн</li>
                        <li>простота в эксплуатации</li>
                    </ul>

                    <h2>Отличия от мусоровозов с боковой загрузкой:</h2>

                    <p>
                        Применение системы прессования в мусоровозах с задней загрузкой позволяет повысить коэффициент уплотнения мусора до 7, в то время как в мусоровозах
                        с боковой загрузкой, этот коэффициент не превышает 2,5-4,
                        что увеличивает массу вывозимого мусора и позволяет сократить издержки на эксплуатацию за счет снижения необходимого количества единиц спецтехники
                    </p>

                    <p>
                        Применение технологии задней загрузки позволяет решать экологические проблемы за счет исключения просыпания мусора при загрузке контейнера, так как загрузка осуществляется
                        в габаритах мусороприемника, а не через небольшую воронку на крыше мусоросборника, как при боковой загрузке
                    </p>

                    <p>
                        Работа с механизмом опрокидывания на мусоровозах с задней загрузкой значительно безопасней для оператора машины, т.к. подъем контейнера осуществляется на высоту 1,5-1,8 м
                        от земли, а не на 2,5-3 м как при боковой загрузке
                    </p>

                    <p>
                        Применение контейнеров на колесах позволяет подавать их к месту разгрузки от мест, куда машина не может подъехать близко
                    </p>

                    <p>
                        Мусоровоз с задней загрузкой возможно загружать вручную. При боковой же, погрузка может осуществляться только из контейнеров заданного типа
                    </p>
                </div>

                <div class="tab-content product-reviews fade">
                    <div class="product-reviews__container">
                        <a href="javascript:void(0)" class="product-reviews__item">
                            <img src="<?php echo $path; ?>img/product/slider_thumb2.jpg" alt="thumb">
                            <div class="product-reviews__col">
                                <div class="product-reviews__title">Прицеп-цистерна ПЦ 86531</div>
                                <div class="product-reviews__text">
                                    Благодарю Вас за операвтиную помощь в устранении неисправностей ТЗА-10.
                                </div>
                            </div>
                        </a>

                        <a href="javascript:void(0)" class="product-reviews__item">
                            <img src="<?php echo $path; ?>img/product/slider_thumb2.jpg" alt="thumb">
                            <div class="product-reviews__col">
                                <div class="product-reviews__title">Полуприцеп-цистерна ППЦ-91392-0000010</div>
                                <div class="product-reviews__text">
                                    Позвольте выразить Вам и Вашим сотрудникам сердечную признательность...
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="product-reviews__btn">
                        <a href="javascript:void(0)" class="btn transparent-btn">Все отзывы</a>
                    </div>

                </div>

                <div class="tab-content product-documents fade">
                    <div class="product-documents__container">
                        <a href="javascript:void(0)" class="product-documents__item">
                            <img src="<?php echo $path; ?>img/icons/pdf.svg" alt="pdf">
                            <div class="product-documents__col">
                                <div class="product-documents__title">Спецификация ППЦ-91399</div>
                                <div class="product-documents__desc">
                                    pdf, 5.6 мб
                                </div>
                            </div>
                        </a>

                        <a href="javascript:void(0)" class="product-documents__item">
                            <img src="<?php echo $path; ?>img/icons/pdf.svg" alt="pdf">
                            <div class="product-documents__col">
                                <div class="product-documents__title">Условия гарантии</div>
                                <div class="product-documents__desc">
                                    pdf, 5.6 мб
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- <footer class="footer green-footer">
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
</footer> -->

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
