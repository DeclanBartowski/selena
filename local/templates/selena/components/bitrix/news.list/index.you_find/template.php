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
	<div class="advantages-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 order-md-2">
					<div class="section-title"><?= $arResult['NAME']; ?></div>
					<ol class="advantages-list">
                        <?
                        foreach ($arResult['ITEMS'] as $key => $arItem) { ?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
							<li id="<?= $this->GetEditAreaId($arItem['ID']); ?>"><?= $arItem['NAME']; ?></li>
                        <? } ?>
					</ol>
				</div>
                <? if ($arResult["PICTURE"]) {
                    $picture = CFile::ResizeImageGet($arResult["PICTURE"],
                        ['width' => 483, 'height' => 693],
                        BX_RESIZE_IMAGE_PROPORTIONAL
                    )['src'];
                    ?>
					<div class="col-md-7 left-column">
						<div class="unified-img unified-mod_img">
							<img data-src="<?= $picture; ?>" alt="alt">
						</div>
					</div>
                <? } ?>
			</div>
		</div>
	</div>
<? } ?>