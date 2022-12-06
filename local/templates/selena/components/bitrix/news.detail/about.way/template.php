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
<div class="way-section green-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-7 unified_left-column">
				<div class="section-title"><?= $arResult['NAME']; ?></div>
                <?= $arResult['~DETAIL_TEXT']; ?>
			</div>
            <? if ($arResult['DETAIL_PICTURE']['ID']) {
                $picture = CFile::ResizeImageGet($arResult['DETAIL_PICTURE']['ID'],
                    ['width' => 440, 'height' => 487],
                    BX_RESIZE_IMAGE_PROPORTIONAL
                )['src'];
                ?>
				<div class="col-md-5 unified_right-column">
					<div class="unified-img unified-img_third">
						<img alt="alt" src="<?= $picture; ?>">
					</div>
				</div>
            <? } ?>
		</div>
	</div>
</div>