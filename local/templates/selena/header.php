<?

use \Bitrix\Main\Page\Asset;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>" class="no-js">
    <head>
        <title><? $APPLICATION->ShowTitle() ?></title>
        <?
        Asset::getInstance()->addString('<meta content="' . SITE_TEMPLATE_PATH . '/browserconfig.xml" name="msapplication-config" />');
        Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
        Asset::getInstance()->addString('<link href="' . SITE_TEMPLATE_PATH . '/img/favicon.ico" rel="icon" type="image/png" />');
        Asset::getInstance()->addString('<link href="' . SITE_TEMPLATE_PATH . '/img/favicon.png" rel="icon" type="image/png" />');
        Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="100x120" href="' . SITE_TEMPLATE_PATH . '/img/apple-touch-icon.png" />');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/min.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/costume.css");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/min.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/costume.js");
        ?>
        <style>body{opacity: 0;}</style>
        <? $APPLICATION->ShowHead(); ?>

	    <!--Раскомментировать для капчи-->
	    <!--<script src="https://www.google.com/recaptcha/api.js?render=<?php /*echo SITE_KEY*/?>"></script>
	    <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('<?php /*echo SITE_KEY;*/?>', {action: 'homepage'}).then(function(token) {
                    $('[name="g-recaptcha-response"]').each(function () {
	                    $(this).val(token);
                    });
                });
            });
	    </script>-->
    </head>

<body>
<? $APPLICATION->ShowPanel(); ?>

<!--[if lt IE 10]>
<p class="browsehappy"><br>Вы используете <strong>устаревший</strong> браузер.
    Пожалуйста, <a href="http://browsehappy.com/">обновите его</a> для корректного
    отображения сайтов.</p>
<![endif]-->

<div class="global-wrapper">
    <div class="wrapper-loader">
        <div class="logo-loader_content">
            <div class="logo-loader"></div>
        </div>
        <div class="wrapper_loader-text">
            <span class="loader-text"><?= GetMessage('OUR_WORLD');?></span>
        </div>
    </div>
    <div class="bg-overlay"></div>
    <div class="menu-fixed">
        <span class="ico-close menu-fixed_close-btn"></span>
        <div class="menu-fixed_body">
            <div class="menu-fixed_content">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "header_menu",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                    )
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "socials",
                    Array(
                    	"ADDITIONAL_CLASS" => 'fixed_social-network',
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "N",
                        "DISPLAY_PICTURE" => "N",
                        "DISPLAY_PREVIEW_TEXT" => "N",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("ID", ""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "7",
                        "IBLOCK_TYPE" => "contacts",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "N",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "20",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("LINK", "ICON", ""),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "SORT",
                        "SORT_BY2" => "NAME",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "DESC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/header/phone.php"
                    )
                );?>

                <a href="#callback-2" data-toggle="modal" class="main-btn">
	                <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/header/get_call.php"
                        )
                    );?>
                </a>
            </div>
        </div>
        <span class="menu-fixed_text">
	        <span class="text"><?= GetMessage('MENU');?></span>
	        <span class="text-2"><?= GetMessage('CLOSE');?></span>
        </span>
    </div>
    <header class="ui-header">
        <div class="container">
            <div class="hamburger hamburger--spring">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "socials",
                Array(
                    "ADDITIONAL_CLASS" => 'tablet-small_hidden',
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "N",
                    "DISPLAY_PICTURE" => "N",
                    "DISPLAY_PREVIEW_TEXT" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("ID", ""),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "7",
                    "IBLOCK_TYPE" => "contacts",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("LINK", "ICON", ""),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "NAME",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "DESC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );?>
            <div class="head-logo">
                <a href="<?= SITE_DIR;?>"><img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/logo.svg" alt="alt"></a>
            </div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/header/phone-header.php"
                )
            );?>
        </div>
    </header>
    <!-- END UI-HEADER -->
    <main class="main-content">
	    <?if ($APPLICATION->GetProperty('text_page') === 'Y') {?>
	    <div class="contact-section">
		    <div class="container">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "breadcrumbs",
                    Array(
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0"
                    )
                ); ?>
			    <h1 class="line-title"><? $APPLICATION->ShowTitle(false); ?></h1>
			    <div class="row align-items-center">
				    <div class="col-md-12">
	    <?}?>
