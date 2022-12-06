<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
if ($arResult['PROPERTIES']['SERVICES']['VALUE']) {
    $arSelect = Array("ID", "NAME", "PROPERTY_PRICE", "PREVIEW_TEXT");
    $arFilter = Array(
        "IBLOCK_ID" => 12,
        "ID" => $arResult['PROPERTIES']['SERVICES']['VALUE'],
        "ACTIVE" => "Y"
    );
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    while ($ob = $res->Fetch()) {
        $arResult['SERVICES'][] = $ob;
    }
}