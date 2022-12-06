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
<div class="guide-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 order-md-2">
				<div class="section-title"><?= $arResult['NAME']; ?></div>
                <?= $arResult['~DETAIL_TEXT']; ?>
			</div>
            <? if ($arResult['DETAIL_PICTURE']['ID']) {
                $picture = CFile::ResizeImageGet($arResult['DETAIL_PICTURE']['ID'],
                    ['width' => 404, 'height' => 504],
                    BX_RESIZE_IMAGE_PROPORTIONAL
                )['src'];
                ?>
				<div class="col-md-6 right-mod_column text-center">
					<div class="unified-img unified-img_fourth">
						<img alt="alt" src="<?= $picture; ?>">
					</div>
				</div>
            <? } ?>
		</div>
	</div>
</div>