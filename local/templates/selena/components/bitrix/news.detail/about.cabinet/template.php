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
<div class="my-office_section">
	<div class="container">
		<div class="section-title"><?= $arResult['NAME']; ?></div>
		<div class="row align-items-center">
            <? if ($arResult['~PREVIEW_TEXT']) { ?>
				<div class="col-md-6 left-column">
					<p>
                        <?= $arResult['~PREVIEW_TEXT']; ?>
					</p>
				</div>
            <? } ?>
			<div class="col-md-6">
				<ul class="my-office_list my-office_list-mod">
                    <? if ($arResult['PROPERTIES']['CHILD_ZONE']['VALUE']) { ?>
						<li>
							<div class="my-office_item">
								<span class="item-number"><?= $arResult['PROPERTIES']['CHILD_ZONE']['VALUE']; ?></span>
                                <?= htmlspecialchars_decode($arResult['PROPERTIES']['CHILD_ZONE']['DESCRIPTION']); ?>
							</div>
						</li>
                    <? } ?>
                    <? if ($arResult['PROPERTIES']['MINUTE_SESSION']['VALUE']) { ?>
						<li>
							<div class="my-office_item">
								<span class="item-number"><?= $arResult['PROPERTIES']['MINUTE_SESSION']['VALUE']; ?></span>
                                <?= htmlspecialchars_decode($arResult['PROPERTIES']['MINUTE_SESSION']['DESCRIPTION']); ?>
							</div>
						</li>
                    <? } ?>
                    <? if ($arResult['PROPERTIES']['CABINET']['VALUE']) { ?>
						<li class="last-item">
							<div class="my-office_item">
								<span class="item-number"><?= $arResult['PROPERTIES']['CABINET']['VALUE']; ?></span>
                                <?= htmlspecialchars_decode($arResult['PROPERTIES']['CABINET']['DESCRIPTION']); ?>
							</div>
						</li>
                    <? } ?>
				</ul>
			</div>
		</div>
	</div>
    <? if ($arResult['PROPERTIES']['PHOTO']['VALUE']) { ?>
		<div class="my-office_slider-mod">
            <? foreach ($arResult['PROPERTIES']['PHOTO']['VALUE'] as $photo) {
                $resized = CFile::ResizeImageGet($photo,
                    ['width' => 589, 'height' => 728],
                    BX_RESIZE_IMAGE_PROPORTIONAL
                )['src'];
                ?>
				<div class="slide-item">
					<a href="<?= CFile::GetPath($photo); ?>" class="fancybox" data-fancybox="gallery">
						<img data-src="<?= $resized; ?>" alt="alt">
						<span class="loop-icon ico-plus"></span>
					</a>
				</div>
            <? } ?>
		</div>
    <? } ?>
</div>