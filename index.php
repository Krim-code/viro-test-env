<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");
?>

    <section class="offer">
        <div class="offer-slider">
            <div class="offer-slide">
                <img src="./<?=SITE_TEMPLATE_PATH?>img/offer/slide1.png" class="offer-slide__bg" alt="slide1">
                <div class="uk-container">
                    <h1 class="offer-slide__title">
                        Качественное образование сегодня - профессиональный успех завтра!
                    </h1>
                </div>
                <img src="./img/offer/add-bg.png" alt="addbg" class="offer-slide__addbg">
            </div>
            <div class="offer-slide">
                <img src="./img/offer/slide1.png" class="offer-slide__bg" alt="slide1">
                <div class="uk-container">
                    <h1 class="offer-slide__title">
                        Качественное2 образование сегодня - профессиональный успех завтра!
                    </h1>
                </div>
                <img src="./img/offer/add-bg.png" alt="addbg" class="offer-slide__addbg">
            </div>
            <div class="offer-slide">
                <img src="./img/offer/slide1.png" class="offer-slide__bg" alt="slide1">
                <div class="uk-container">
                    <h1 class="offer-slide__title">
                        Качественное3 образование сегодня - профессиональный успех завтра!
                    </h1>
                </div>
                <img src="./img/offer/add-bg.png" alt="addbg" class="offer-slide__addbg">
            </div>
        </div>
    </section>

    <section class="base-section usefull-section">
        <div class="uk-container">
            <h2 class="base-section__title">Полезные ссылки</h2>
            <div class="usefull-links__lite">
                <a href="#" class="base-link-card base-link-card__lite">
                    <h3>WIKI-Владимир</h3>
                    <i class="arrow-round fa fa-long-arrow-right"></i>
                </a>
                <a href="#" class="base-link-card base-link-card__lite">
                    <h3>Ученику</h3>
                    <i class="arrow-round fa fa-long-arrow-right"></i>
                </a>
                <a href="#" class="base-link-card base-link-card__lite">
                    <h3>Виртуальный методический кабинет</h3>
                    <i class="arrow-round fa fa-long-arrow-right"></i>
                </a>
                <a href="#" class="base-link-card base-link-card__lite">
                    <h3>Вебинары</h3>
                    <i class="arrow-round fa fa-long-arrow-right"></i>
                </a>
                <a href="#" class="base-link-card base-link-card__lite">
                    <h3>Подготовка к гиа</h3>
                    <i class="arrow-round fa fa-long-arrow-right"></i>
                </a>
            </div>
            <div class="usefull-links__middle">
                <a href="#" class="base-link-card base-link-card__middle">
                    <div class="base-link-card__middle-image">
                        <img src="./img/usefull/cnppm.png" alt="cnppm">
                        <h3>ЦНППМ</h3>
                    </div>
                    <i class="arrow-round fa fa-long-arrow-right"></i>
                </a>
                <a href="#" class="base-link-card base-link-card__middle">
                    <div class="base-link-card__middle-image">
                        <img src="./img/usefull/qvant.png" alt="cnppm">
                        <h3>Кванториум 33</h3>
                    </div>
                    <i class="arrow-round fa fa-long-arrow-right"></i>
                </a>
                <a href="#" class="base-link-card base-link-card__middle">
                    <div class="base-link-card__middle-image">
                        <img src="./img/usefull/platforma.png" alt="cnppm">
                        <h3>Платформа 33</h3>
                    </div>
                    <i class="arrow-round fa fa-long-arrow-right"></i>
                </a>
            </div>
            <div class="usefull-links__hard">
                <a href="#" class="base-link-card base-link-card__hard">
                    <div class="base-link-card__hard-head">
                        <div class="base-link-card__hard-head__img">
                            <img src="./img/usefull/gosuslugi.png" alt="gosuslugi">
                        </div>
                        <div class="base-link-card__hard-link">
                            <span>pos.gosuslugi.ru</span>
                            <i class="arrow-round fa fa-long-arrow-right"></i>
                        </div>
                    </div>
                    <h3>ЕСТЬ ПРЕДЛОЖЕНИЯ ПО ОРГАНИЗАЦИИ УЧЕБНОГО ПРОЦЕССА ИЛИ ЗНАЕТЕ, КАК СДЕЛАТЬ КОЛЛЕДЖ ЛУЧШЕ? </h3>
                    <button href="#" class="base-btn base-btn_primary">
                        Написать о  проблеме
                    </button>
                </a>
                <a href="#" class="base-link-card base-link-card__hard">
                    <div class="base-link-card__hard-head">
                        <div class="base-link-card__hard-head__img">
                            <img src="./img/usefull/obrazovanie33.png" alt="gosuslugi">
                        </div>
                        <div class="base-link-card__hard-link">
                            <span>образование33.рф</span>
                            <i class="arrow-round fa fa-long-arrow-right"></i>
                        </div>
                    </div>
                    <h3>ИНФОРМАЦИОННЫЙ ПОРТАЛ
                        “ЭЛЕКТРОННОЕ ОБРАЗОВАНИЕ ВЛАДИМИРСКОЙ ОБЛАСТИ”  </h3>
                    <button class="base-btn base-btn_primary">
                        Перейти
                    </button>
                </a>
            </div>
        </div>
    </section>

    <section class="base-section actual-section">
        <div class="uk-container">
            <h2 class="base-section__title">Актуальное</h2>
            <ul class="actual-links">
                <li class="actual-links__item">
                    <a href="#">
                        Вызов на август
                        <i class="arrow-round fa fa-long-arrow-right"></i>
                    </a>
                </li>
                <li class="actual-links__item">
                    <a href="#">
                        Федеральные основные образовательные программы
                        <i class="arrow-round fa fa-long-arrow-right"></i>
                    </a>
                </li>
                <li class="actual-links__item">
                    <a href="#">
                        Справка-вызов на июнь 2023 г.
                        <i class="arrow-round fa fa-long-arrow-right"></i>
                    </a>
                </li>
                <li class="actual-links__item">
                    <a href="#">
                        Регистрационная форма
                        <i class="arrow-round fa fa-long-arrow-right"></i>
                    </a>
                </li>
                <li class="actual-links__item">
                    <a href="#">
                        Противодействие коррупции
                        <i class="arrow-round fa fa-long-arrow-right"></i>
                    </a>
                </li>
                <li class="actual-links__item">
                    <a href="#">
                        Централизованный сервис содействия системы профессионального роста педагогических работников
                        <i class="arrow-round fa fa-long-arrow-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="base-section news-section">
        <div class="uk-container">
            <ul uk-tab class="news-tabs">
                <li class="uk-active"><a href="#">Новости</a></li>
                <li><a href="#">Анонсы</a></li>
                <li><a href="#">Мероприятия</a></li>
                <a href="#" class="base-secondary-link">
                    Все Новости
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            </ul>
            <ul id="my-id" class="uk-switcher uk-margin">
                <li class="news-list">
                    <div class="news-list__item">
                        <div class="news-list__item-content">
                            <div class="news-list__item-content-meta">
                                <span class="datetime">21 июля 2023</span>
                                <span class="tag">Новости</span>
                            </div>
                            <h4>Летняя профильная смена: хроники второго дня</h4>
                            <p>«Этот день мы провели от души!»- начнем отчет именно с фразы участницы нашей смены, Звездиной Дарьи из Гусь-Хрустального района (программа «Олимпиадная история»). Что было во второй день профильной смены? Прежде всего – предметные погружения (ради чего и ехали ребята на образовательный марафон). Вторую половину дня скорректировал дождь! Вместо экскурсии по городу ребята отправились в два музея. Первый из них - Музей народного образования (находится прямо в стенах Владимирского института развития образования имени Л.И. Новиковой). Второй – Музей непридуманных историй. После ужина ребят ждала научно-популярная лекция с нестандартной темой - оцените! - «Аннушка, Руслан и Людмила. Как русская культура влияет на атомную отрасль», которую прочитала ребятам Наталия Борисовна Фельдман, кандидат филологических наук, координатор специальных проектов ИЦАЭ Владимира.</p>
                            <a href="#" class="base-primary-link">
                                Читать полностью
                                <i class="fa fa-angle-double-right "></i>
                            </a>
                        </div>
                        <div class="news-list__item-image">
                            <img src="./img/news/news.png" alt="news">
                        </div>
                    </div>
                    <div class="news-list__item">
                        <div class="news-list__item-content">
                            <div class="news-list__item-content-meta">
                                <span class="datetime">21 июля 2023</span>
                                <span class="tag">Новости</span>
                            </div>
                            <h4>Летняя профильная смена Центра поддержки одаренных детей «Платформа 33»: день первый</h4>
                            <p>«Этот день мы провели от души!»- начнем отчет именно с фразы участницы нашей смены, Звездиной Дарьи из Гусь-Хрустального района (программа «Олимпиадная история»). Что было во второй день профильной смены? Прежде всего – предметные погружения (ради чего и ехали ребята на образовательный марафон). Вторую половину дня скорректировал дождь! Вместо экскурсии по городу ребята отправились в два музея. Первый из них - Музей народного образования (находится прямо в стенах Владимирского института развития образования имени Л.И. Новиковой). Второй – Музей непридуманных историй. После ужина ребят ждала научно-популярная лекция с нестандартной темой - оцените! - «Аннушка, Руслан и Людмила. Как русская культура влияет на атомную отрасль», которую прочитала ребятам Наталия Борисовна Фельдман, кандидат филологических наук, координатор специальных проектов ИЦАЭ Владимира.</p>
                            <a href="#" class="base-primary-link">
                                Читать полностью
                                <i class="fa fa-angle-double-right "></i>
                            </a>
                        </div>
                        <div class="news-list__item-image">
                            <img src="./img/news/news2.png" alt="news">
                        </div>
                    </div>
                    <div class="news-list__item">
                        <div class="news-list__item-content">
                            <div class="news-list__item-content-meta">
                                <span class="datetime">21 июля 2023</span>
                                <span class="tag">Новости</span>
                            </div>
                            <h4>Летняя профильная смена: хроники второго дня</h4>
                            <p>«Этот день мы провели от души!»- начнем отчет именно с фразы участницы нашей смены, Звездиной Дарьи из Гусь-Хрустального района (программа «Олимпиадная история»). Что было во второй день профильной смены? Прежде всего – предметные погружения (ради чего и ехали ребята на образовательный марафон). Вторую половину дня скорректировал дождь! Вместо экскурсии по городу ребята отправились в два музея. Первый из них - Музей народного образования (находится прямо в стенах Владимирского института развития образования имени Л.И. Новиковой). Второй – Музей непридуманных историй. После ужина ребят ждала научно-популярная лекция с нестандартной темой - оцените! - «Аннушка, Руслан и Людмила. Как русская культура влияет на атомную отрасль», которую прочитала ребятам Наталия Борисовна Фельдман, кандидат филологических наук, координатор специальных проектов ИЦАЭ Владимира.</p>
                            <a href="#" class="base-primary-link">
                                Читать полностью
                                <i class="fa fa-angle-double-right "></i>
                            </a>
                        </div>
                        <div class="news-list__item-image">
                            <img src="./img/news/news.png" alt="news">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="news-list__item">
                        <div class="news-list__item-content">
                            <div class="news-list__item-content-meta">
                                <span class="datetime">21 июля 2023</span>
                                <span class="tag">Новости</span>
                            </div>
                            <h4>Летняя профильная смена: хроники второго дня</h4>
                            <p>«Этот день мы провели от души!»- начнем отчет именно с фразы участницы нашей смены, Звездиной Дарьи из Гусь-Хрустального района (программа «Олимпиадная история»). Что было во второй день профильной смены? Прежде всего – предметные погружения (ради чего и ехали ребята на образовательный марафон). Вторую половину дня скорректировал дождь! Вместо экскурсии по городу ребята отправились в два музея. Первый из них - Музей народного образования (находится прямо в стенах Владимирского института развития образования имени Л.И. Новиковой). Второй – Музей непридуманных историй. После ужина ребят ждала научно-популярная лекция с нестандартной темой - оцените! - «Аннушка, Руслан и Людмила. Как русская культура влияет на атомную отрасль», которую прочитала ребятам Наталия Борисовна Фельдман, кандидат филологических наук, координатор специальных проектов ИЦАЭ Владимира.</p>
                            <a href="#" class="base-primary-link">
                                Читать полностью
                                <i class="fa fa-angle-double-right "></i>
                            </a>
                        </div>
                        <div class="news-list__item-image">
                            <img src="./img/news/news.png" alt="news">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="news-list__item">
                        <div class="news-list__item-content">
                            <div class="news-list__item-content-meta">
                                <span class="datetime">21 июля 2023</span>
                                <span class="tag">Новости</span>
                            </div>
                            <h4>Летняя профильная смена: хроники второго дня</h4>
                            <p>«Этот день мы провели от души!»- начнем отчет именно с фразы участницы нашей смены, Звездиной Дарьи из Гусь-Хрустального района (программа «Олимпиадная история»). Что было во второй день профильной смены? Прежде всего – предметные погружения (ради чего и ехали ребята на образовательный марафон). Вторую половину дня скорректировал дождь! Вместо экскурсии по городу ребята отправились в два музея. Первый из них - Музей народного образования (находится прямо в стенах Владимирского института развития образования имени Л.И. Новиковой). Второй – Музей непридуманных историй. После ужина ребят ждала научно-популярная лекция с нестандартной темой - оцените! - «Аннушка, Руслан и Людмила. Как русская культура влияет на атомную отрасль», которую прочитала ребятам Наталия Борисовна Фельдман, кандидат филологических наук, координатор специальных проектов ИЦАЭ Владимира.</p>
                            <a href="#" class="base-primary-link">
                                Читать полностью
                                <i class="fa fa-angle-double-right "></i>
                            </a>
                        </div>
                        <div class="news-list__item-image">
                            <img src="./img/news/news.png" alt="news">
                        </div>
                    </div>
                    <div class="news-list__item">
                        <div class="news-list__item-content">
                            <div class="news-list__item-content-meta">
                                <span class="datetime">21 июля 2023</span>
                                <span class="tag">Новости</span>
                            </div>
                            <h4>Летняя профильная смена: хроники второго дня</h4>
                            <p>«Этот день мы провели от души!»- начнем отчет именно с фразы участницы нашей смены, Звездиной Дарьи из Гусь-Хрустального района (программа «Олимпиадная история»). Что было во второй день профильной смены? Прежде всего – предметные погружения (ради чего и ехали ребята на образовательный марафон). Вторую половину дня скорректировал дождь! Вместо экскурсии по городу ребята отправились в два музея. Первый из них - Музей народного образования (находится прямо в стенах Владимирского института развития образования имени Л.И. Новиковой). Второй – Музей непридуманных историй. После ужина ребят ждала научно-популярная лекция с нестандартной темой - оцените! - «Аннушка, Руслан и Людмила. Как русская культура влияет на атомную отрасль», которую прочитала ребятам Наталия Борисовна Фельдман, кандидат филологических наук, координатор специальных проектов ИЦАЭ Владимира.</p>
                            <a href="#" class="base-primary-link">
                                Читать полностью
                                <i class="fa fa-angle-double-right "></i>
                            </a>
                        </div>
                        <div class="news-list__item-image">
                            <img src="./img/news/news.png" alt="news">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="base-section thirdparty-resources">
        <div class="uk-container">
            <h2 class="base-section__title">Сторонние ресурсы</h2>
            <div class="thirdparty-resources__links">
                <a href="#" class="thirdparty-resources__item">
                    <div class="thirdparty-resources__item-image">
                        <img src="./img/common/maximize.png" alt="maximize">
                    </div>
                    <h5>
                        Актуальная достоверная информация из официальных источников
                    </h5>
                </a>
                <a href="#" class="thirdparty-resources__item">
                    <div class="thirdparty-resources__item-image">
                        <img src="./img/common/maximize.png" alt="maximize">
                    </div>
                    <h5>
                        Прием-2022: инструкция по поступлению в ВУЗ
                    </h5>
                </a>
                <a href="#" class="thirdparty-resources__item">
                    <div class="thirdparty-resources__item-image">
                        <img src="./img/common/maximize.png" alt="maximize">
                    </div>
                    <h5>
                        Официальная группа ВКонтакте
                    </h5>
                </a>
                <a href="#" class="thirdparty-resources__item">
                    <div class="thirdparty-resources__item-image">
                        <img src="./img/common/maximize.png" alt="maximize">
                    </div>
                    <h5>
                        Электронный колледж
                    </h5>
                </a>
                <a href="#" class="thirdparty-resources__item">
                    <div class="thirdparty-resources__item-image">
                        <img src="./img/common/maximize.png" alt="maximize">
                    </div>
                    <h5>
                        Результаты независимой оценки качества образовательной деятельности
                    </h5>
                </a>
                <a href="#" class="thirdparty-resources__item">
                    <div class="thirdparty-resources__item-image">
                        <img src="./img/common/maximize.png" alt="maximize">
                    </div>
                    <h5>
                        Единое окно доступа к информационным ресурсам
                    </h5>
                </a>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>