<?php
global $APPLICATION;
use Bitrix\Main\Page\Asset;


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?


    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/font-awesome.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/normalize.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/slick.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/uikit.min.css");


    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/style.css");

    Asset::getInstance()->addString("<link rel='preconnect' href='https://fonts.googleapis.com'>");
    Asset::getInstance()->addString(" <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>");
    Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;900&display=swap' rel='stylesheet'>");


    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery-3.6.4.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/uikit.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/slick.js");

    $APPLICATION->ShowHead();
    ?>




    <title><? $APPLICATION->ShowTitle();?></title>
</head>
<body>
<? $APPLICATION->ShowPanel();?>

<div id="offcanvas-usage" class="menu-offcanvas" uk-offcanvas="mode: none; overlay: true">
    <div class="uk-offcanvas-bar">
        <div class="uk-container">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <div class="menu-offcanvas-content">
                <div class="menu-offcanvas_left">
                    <h4>Об институте</h4>
                    <ul class="menu-offcanvas-nav">

                        <li><a href="#">История создания</a></li>
                        <li><a href="#">Учредитель</a></li>
                        <li><a href="#">Адреса</a></li>
                        <li><a href="#">Режим работы</a></li>
                        <li><a href="#">Контактная информация</a></li>
                    </ul>
                </div>
                <div class="menu-offcanvas_right">
                    <h4>Об институте</h4>
                    <ul class="menu-offcanvas-nav">
                        <li><a href="#">История создания</a></li>
                        <li><a href="#">Учредитель</a></li>
                        <li><a href="#">Адреса</a></li>
                        <li><a href="#">Режим работы</a></li>
                        <li><a href="#">Контактная информация</a></li>
                    </ul>
                    <div class="mainoverlay-content__search">
                        <div class="form-input form-input_ghost_white form-input_search">
                            <input type="text" placeholder="Поиск по сайту">
                            <a href="#" class="search-link">
                                <img src=".<?=SITE_TEMPLATE_PATH?>/assets/img/common/search-white.png" alt="search">
                            </a>
                        </div>
                        <div class="mainoverlay-content__search-result">
                            <a href="#" class="search-card">
                                <div class="search-card__image">
                                    <img src=".<?=SITE_TEMPLATE_PATH?>/assets/img/common/child.png" alt="search-img">
                                </div>
                                <p>Результат поиска. Наименование материала</p>
                            </a>
                            <a href="#" class="search-card">
                                <div class="search-card__image">
                                    <img src=".<?=SITE_TEMPLATE_PATH?>/assets/img/common/child2.png" alt="search-img">
                                </div>
                                <p>Результат поиска. Наименование материала</p>
                            </a>
                        </div>
                        <a href="#" class="search-result-btn">Все результаты поиска</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="header">
    <div class="header-top">
        <div class="uk-container">
            <div class="header-top_left">
                <a class="header-menu-btn" href="#offcanvas-usage" uk-toggle>
                    <i class="fa fa-bars"></i>

                </a>
                <a class="header-logo">
                    <img src=".<?=SITE_TEMPLATE_PATH?>/assets/img/common/logo.png" alt="logotype">
                    <span>Владимирский институт развития <br> образования им. Л.И. Новиковой</span>
                </a>
            </div>
            <div class="header-top_right">
                <a href="#" class="base-btn base-btn-secondary_outlined btn-blind">
                    <img src=".<?=SITE_TEMPLATE_PATH?>/assets/img/common/orange-eye.png" alt="eye" style="width: 20px; height: 20px; object-fit: contain;">
                    <span onclick="WISP.init('toSpecial');">Версия для слабовидящих</span>
                </a>
                <ul class="social-links">
                    <li class="social-links__item">
                        <a href="#">
                            <img src=".<?=SITE_TEMPLATE_PATH?>/assets/img/common/social-portal.png" alt="portal">
                        </a>
                    </li>
                    <li class="social-links__item">
                        <a href="#">
                            <img src=".<?=SITE_TEMPLATE_PATH?>/assets/img/common/social-vk.png" alt="vk">
                        </a>
                    </li>
                    <li class="social-links__item">
                        <a href="#">
                            <img src=".<?=SITE_TEMPLATE_PATH?>/assets/img/common/social-ok.png" alt="ok">
                        </a>
                    </li>
                </ul>
                <div class="header-top_actions">
                    <a href="#" class="base-btn_icon">
                        <img src=".<?=SITE_TEMPLATE_PATH?>/assets/img/common/search-primary.png" alt="Поиск...">
                    </a>
                    <a href="#" class="base-btn_icon">
                        <img src=".<?=SITE_TEMPLATE_PATH?>/assets/img/common/lk-primary.png" alt="Личный кабинет">
                    </a>
                    <a href="#" class="base-btn base-btn_primary">
                        Написать нам
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "top_menu",
        array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "N",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N",
            "COMPONENT_TEMPLATE" => "top_menu"
        ),
        false
    );?>
</header>
