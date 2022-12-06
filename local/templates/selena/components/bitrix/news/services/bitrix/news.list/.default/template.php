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
<div class="text-center">
	<h1 class="line-title"><?= $arResult['NAME']; ?></h1>
    <? if ($arResult['DESCRIPTION']) { ?>
		<p class="top-text">
            <?= $arResult['DESCRIPTION']; ?>
		</p>
    <? } ?>
</div>
<? if (count($arResult['ITEMS']) > 0) { ?>
	<div class="row services-other_row">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
			<div class="col-sm-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<div class="service-mod_item">
                    <? if ($arItem['PREVIEW_PICTURE']['ID']) {
                        $picture = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'],
                            ['width' => 555, 'height' => 350],
                            BX_RESIZE_IMAGE_PROPORTIONAL
                        )['src'];
                        ?>
						<div class="item-img">
							<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="item-link">
								<img data-src="<?= $picture; ?>" alt="alt">
							</a>
						</div>
                    <? } ?>
					<span class="item-title">
					<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a>
				</span>
                    <? if ($arItem['PREVIEW_TEXT']) { ?>
						<p>
                            <?= $arItem['PREVIEW_TEXT']; ?>
						</p>
                    <? } ?>
					<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="main-btn item-btn"><?= GetMessage('MORE'); ?>
						<span class="ico-arrow"></span>
					</a>
				</div>
			</div>
        <? endforeach; ?>
	</div>
<? } ?>