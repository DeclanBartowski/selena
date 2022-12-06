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
<div class="join-us_section"
     <? if ($arResult['DETAIL_PICTURE']['SRC']) { ?>style="background: url('<?= $arResult['DETAIL_PICTURE']['SRC']; ?>') no-repeat center top; background-size: cover;" <? } ?>>
	<div class="container">
		<div class="join-us_content">
			<div class="section-title"><?= $arResult['NAME']; ?></div>
            <? if ($arResult['CODE'] && $arResult['PREVIEW_TEXT']) { ?>
				<a href="<?= $arResult['CODE'] ?>" data-toggle="modal"
				   class="main-btn"><?= $arResult['PREVIEW_TEXT']; ?></a>
            <? } ?>
		</div>
	</div>
</div>