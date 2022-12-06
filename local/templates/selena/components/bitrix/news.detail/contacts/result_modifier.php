<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if ($arResult['PROPERTIES']['SOCIAL_NETWORK']['VALUE']) {
    $arSelect = Array("ID", "PROPERTY_ICON", "PROPERTY_LINK");
    $arFilter = Array("IBLOCK_ID" => 7, "ID" => $arResult['PROPERTIES']['SOCIAL_NETWORK']['VALUE'], "ACTIVE" => "Y");
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    while ($ob = $res->Fetch()) {
        $arResult['SOCIALS'][] = $ob;
    }
}