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
	<div class="row no-gutters align-items-center">
		<div class="col-md-5 left-column">
			<div class="my-office_desc">
				<div class="section-title"><?= $arResult['NAME']; ?></div>
                <? if ($arResult['~PREVIEW_TEXT']) { ?>
					<p>
                        <?= $arResult['~PREVIEW_TEXT']; ?>
					</p>
                <? } ?>
				<ul class="my-office_list">
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
						<li>
							<div class="my-office_item">
								<span class="item-number"><?= $arResult['PROPERTIES']['CABINET']['VALUE']; ?></span>
                                <?= htmlspecialchars_decode($arResult['PROPERTIES']['CABINET']['DESCRIPTION']); ?>
							</div>
						</li>
                    <? } ?>
				</ul>
			</div>
		</div>
        <? if ($arResult['PROPERTIES']['PHOTO']['VALUE']) { ?>
			<div class="col-md-7">
				<div class="my-office_slider">
                    <? foreach ($arResult['PROPERTIES']['PHOTO']['VALUE'] as $photo) {
                        $resized = CFile::ResizeImageGet($photo,
                            ['width' => 572, 'height' => 700],
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
			</div>
        <? } ?>
	</div>
</div>