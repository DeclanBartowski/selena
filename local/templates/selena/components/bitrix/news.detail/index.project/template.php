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
<div class="about-section">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h2><?= $arResult['NAME'] ?></h2>
                <?= $arResult['~DETAIL_TEXT']; ?>
				<a href="/about/" class="main-btn"><?= GetMessage('READ_ALL'); ?> <span class="ico-arrow"></span></a>
			</div>
            <? if ($arResult['DETAIL_PICTURE']['ID']) {
                $picture = CFile::ResizeImageGet($arResult['DETAIL_PICTURE']['ID'],
                    ['width' => 404, 'height' => 504],
                    BX_RESIZE_IMAGE_PROPORTIONAL
                )['src'];
                ?>
				<div class="col-md-5 right-column">
					<div class="unified-img">
						<img data-src="<?= $picture; ?>" alt="alt">
					</div>
				</div>
            <? } ?>
		</div>
	</div>
</div>