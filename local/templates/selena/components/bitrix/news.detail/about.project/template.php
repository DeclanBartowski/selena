<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="banner-section"
     <? if ($arResult['PREVIEW_PICTURE']['SRC']) { ?>style="background-image:url('<?= $arResult['PREVIEW_PICTURE']['SRC']; ?>')"<? } ?>>
    <? if ($arResult['PROPERTIES']['VIDEO']['VALUE']) { ?>
		<video class="video video-mod video-about" preload="yes" muted="muted" autoplay playsinline loop>
			<source src="<?= CFile::GetPath($arResult['PROPERTIES']['VIDEO']['VALUE']); ?>" class="source"
			        type="video/mp4">
		</video>
    <? } ?>
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
		<h1 class="line-title"><?= $arResult['NAME']; ?></h1>
        <?= $arResult['~DETAIL_TEXT']; ?>
        <? if ($arResult['CODE'] && $arResult['PREVIEW_TEXT']) { ?>
			<a href="<?= $arResult['CODE']; ?>" data-toggle="modal"
			   class="main-btn"><?= $arResult['PREVIEW_TEXT']; ?></a>
        <? } ?>
	</div>
</div>