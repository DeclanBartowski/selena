<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}?>
<?if ($APPLICATION->GetProperty('text_page') === 'Y') {?>
	</div>
	</div>
	</div>
	</div>
<?}?>

<?$APPLICATION->IncludeComponent(
        "2quick:main.feedback",
        "request",
        array(
            "AJAX_MODE" => "Y",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "COMPONENT_TEMPLATE" => "",
            "EMAIL_TO" => "user@mail.ru",
            "EVENT_MESSAGE_ID" => array(
                0 => "11",
            ),
            "INFOBLOCKADD" => "Y",
            "INFOBLOCKID" => "4",
            "OK_TEXT" => "ok",
            "REQUIRED_FIELDS" => array(
                0 => "NONE",
            ),
            "USE_CAPTCHA" => "N",
            "MULTI_FILES" => "N",
            "FILE_SEND" => "N"
        ),
        false
    );?>

</main>
<!-- end main-content -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="main-footer_left-column">
                <div class="footer-logo">
                    <a href="<?= SITE_DIR;?>"><img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/logo.svg" alt="alt"></a>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "socials",
                    Array(
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
            </div>
            <div class="main-footer_right-column">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "services_menu",
                            Array(
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
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "N",
                                "DISPLAY_PREVIEW_TEXT" => "N",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array("NAME", ""),
                                "FILTER_NAME" => "",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "5",
                                "IBLOCK_TYPE" => "services",
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
                                "PROPERTY_CODE" => array("", ""),
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
                                "SORT_ORDER2" => "ASC",
                                "STRICT_SECTION_CHECK" => "N"
                            )
                        );?>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "footer_menu",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "bottom",
                                "USE_EXT" => "N"
                            )
                        );?>
                    </div>
                    <div class="col-md-4 col-sm-6 right-cell">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/footer/phone.php"
                            )
                        );?>
                        <a href="#callback-2" data-toggle="modal" class="main-btn footer-callback">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/footer/get-call.php"
                                )
                            );?>
	                    </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer_bottom-row">
            <div class="main-footer_left-column">
                <div class="copyright">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/footer/company.php"
                        )
                    );?>
	                </div>
            </div>
            <div class="main-footer_right-column">
                <div class="row">
                    <div class="col-sm-9">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "bottom_menu",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "bottom2",
                                "USE_EXT" => "N"
                            )
                        );?>
                    </div>
                    <div class="col-sm-3 right-cell">
                        <a href="https://webmedia39.ru/" class="footer-studio" target="_blank">
	                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/studio.svg" alt="alt">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="scroll-to-top"></div>
</div>

<div aria-hidden="true" class="modal fade js-modal" id="callback" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
        <?$APPLICATION->IncludeComponent(
            "2quick:main.feedback",
            "consult",
            array(
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "COMPONENT_TEMPLATE" => "",
                "EMAIL_TO" => "user@mail.ru",
                "EVENT_MESSAGE_ID" => array(
                    0 => "12",
                ),
                "INFOBLOCKADD" => "Y",
                "INFOBLOCKID" => "9",
                "OK_TEXT" => "ok",
                "REQUIRED_FIELDS" => array(
                    0 => "NONE",
                ),
                "USE_CAPTCHA" => "Y",
                "MULTI_FILES" => "N",
                "FILE_SEND" => "N"
            ),
            false
        );?>
	</div>
</div>

<div aria-hidden="true" class="modal fade js-modal" id="callback-2" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
        <?$APPLICATION->IncludeComponent(
            "2quick:main.feedback",
            "get_call",
            array(
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "COMPONENT_TEMPLATE" => "",
                "EMAIL_TO" => "user@mail.ru",
                "EVENT_MESSAGE_ID" => array(
                    0 => "13",
                ),
                "INFOBLOCKADD" => "Y",
                "INFOBLOCKID" => "10",
                "OK_TEXT" => "ok",
                "REQUIRED_FIELDS" => array(
                    0 => "NONE",
                ),
                "USE_CAPTCHA" => "N",
                "MULTI_FILES" => "N",
                "FILE_SEND" => "N"
            ),
            false
        );?>
	</div>
</div>

<div aria-hidden="true" class="modal fade js-modal"  role="dialog" id="application-accepted">
	<div class="modal-dialog modal-mod_dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button class="close" data-dismiss="modal" type="button"><span class="ico-close"></span></button>
			<span class="ico-check popup-check"></span>
			<p class="modal-text"><?= GetMessage('REQUEST_SUCCESS');?></p>
		</div>
	</div>
</div>

</body>
</html>
