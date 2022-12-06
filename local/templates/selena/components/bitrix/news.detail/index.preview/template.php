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
<div class="main-section">
    <? if ($arResult['PROPERTIES']['VIDEO']['VALUE']) { ?>
		<video class="video" preload="yes" muted="muted" autoplay playsinline loop>
			<source src="<?= CFile::GetPath($arResult['PROPERTIES']['VIDEO']['VALUE']); ?>" class="source"
			        type="video/mp4">
		</video>
    <? } ?>
	<div class="container">
        <?= $arResult['~DETAIL_TEXT']; ?>
        <? if ($arResult['CODE'] && $arResult['PREVIEW_TEXT']) { ?>
			<a href="<?= $arResult['CODE']; ?>" data-toggle="modal"
			   class="main-btn"><?= $arResult['PREVIEW_TEXT']; ?></a>
        <? } ?>
	</div>
</div>
