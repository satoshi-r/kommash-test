<?php $path = "local/templates/main/"; ?>
<?php include_once 'local/templates/main/header.php'; ?>

<header class="header green-header">
    <div class="header-bg"></div>
    <div class="header-container">
        <div class="header-btns">
            <button class="header-btns__hamburger">
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
            <ul>
                <li><a href="javascript:void(0)" class="header-menu__btn">О компании</a></li>
                <li><a href="javascript:void(0)" class="header-menu__btn">Производство</a></li>
                <li>
                    <a href="/">
                        <img src="<?php echo $path; ?>img/logo.svg" alt="logo">
                    </a>
                </li>
                <li><a href="javascript:void(0)" class="header-menu__btn">Продукция</a></li>
                <li><a href="javascript:void(0)" class="header-menu__btn">Сервис и запчасти</a></li>
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