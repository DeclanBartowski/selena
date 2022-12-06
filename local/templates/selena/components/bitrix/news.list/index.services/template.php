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

if (count($arResult['ITEMS']) > 0) {
    ?>
	<div class="services-section">
		<div class="container">
			<div class="services-section_header">
				<div class="section-title"><?= GetMessage('OUR_WORLD') ?></div>
				<a href="<?= str_replace('#SITE_DIR#', '', $arResult['LIST_PAGE_URL']) ?>"
				   class="main-btn mobile-hidden"><?= GetMessage('ALL_SERVICES') ?> <span class="ico-arrow"></span></a>
			</div>
		</div>
		<div class="services-slider">
            <?
            foreach ($arResult['ITEMS'] as $key => $arItem) { ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
				<div class="service-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <?
                    if ($arItem['PROPERTIES']['INDEX_PICTURE']['VALUE']) {
                        $picture = CFile::ResizeImageGet($arItem['PROPERTIES']['INDEX_PICTURE']['VALUE'],
                            ['width' => 380, 'height' => 526],
                            BX_RESIZE_IMAGE_PROPORTIONAL
                        )['src'];
                        ?>
						<img data-src="<?= $picture; ?>" alt="alt">
                        <?
                    } ?>
					<div class="service-item_desc">
						<a href="<?= $arItem['DETAIL_PAGE_URL']; ?>">
							<span class="service-item_title"><?= $arItem['NAME']; ?></span>
                            <?
                            if ($arItem['PREVIEW_TEXT']) { ?>
								<p>
                                    <?= $arItem['PREVIEW_TEXT']; ?>
								</p>
                                <?
                            } ?>
						</a>
					</div>
				</div>
                <?
            }
            ?>
		</div>
		<div class="mobile-visible container">
			<a href="<?= str_replace('#SITE_DIR#', '', $arResult['LIST_PAGE_URL']) ?>"
			   class="main-btn unified_mobile-btn"><?= GetMessage('ALL_SERVICES') ?> <span class="ico-arrow"></span></a>
		</div>
	</div>
    <?
}

