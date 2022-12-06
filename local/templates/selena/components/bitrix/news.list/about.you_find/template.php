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
    $chunked = array_chunk($arResult['ITEMS'], 2);
    ?>
	<div class="advantages-mod_section">
		<div class="container">
            <? if ($arResult['~DESCRIPTION']) { ?>
				<div class="advantages-mod_header">
                    <?= $arResult['~DESCRIPTION'] ?>
				</div>
            <? } ?>
			<div class="section-title tablet-small_visible"><?= $arResult['NAME']; ?></div>
            <?
            $cnt = $globalCnt = 1;
            $wrapClass = [
                1 => '',
                2 => '',
                3 => 'item-third',
                4 => 'text-right',
            ];
            $subWrapClass = [
                1 => 'desc-right desc-second',
                2 => '',
                3 => 'desc-three',
                4 => 'desc-right',
            ];
            foreach ($chunked as $group) {
                if ($cnt === 4) {
                    $cnt = 1;
                }
                ?>
				<div class="row">
                    <?
                    foreach ($group as $key => $arItem) { ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <? if ($key % 2 === 0) { ?>
							<div class="col-md-7 order-md-2 right-column"
							     id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
								<div class="advantages-item <?= $wrapClass[$cnt]; ?>">
                                    <? if ($arItem['PREVIEW_PICTURE']['SRC']) { ?>
										<div class="advantages-item_img">
											<img data-src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" alt="alt">
										</div>
                                    <? } ?>
									<div class="text-right">
										<div class="advantages-item_desc <?= $subWrapClass[$cnt]; ?>">
											<span class="item-number"><?= $globalCnt < 10 ? '0' . $globalCnt : $globalCnt; ?></span>
											<p>
                                                <?= $arItem['NAME']; ?>
											</p>
										</div>
									</div>
								</div>
                                <? if ($arItem['~PREVIEW_TEXT']) {
                                	$preview = strip_tags($arItem['~PREVIEW_TEXT']);?>
									<div class="text-right">
										<div class="section-title balance-title tablet-small_hidden"><?= $arItem['~PREVIEW_TEXT']; ?></div>
									</div>
                                <? } ?>
							</div>
                        <? } else { ?>
							<div class="col-md-5" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
								<?if ($cnt === 2) {?>
								<div class="section-title text-left tablet-small_hidden"><?= $arResult['NAME'];?></div>
			                    <?}?>
								<div class="advantages-item">
                                    <? if ($arItem['PREVIEW_PICTURE']['SRC']) { ?>
										<div class="advantages-item_img <?= $wrapClass[$cnt]; ?>">
											<img data-src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" alt="alt">
										</div>
                                    <? } ?>
									<div class="advantages-item_desc <?= $subWrapClass[$cnt]; ?>">
										<span class="item-number"><?= $globalCnt < 10 ? '0' . $globalCnt : $globalCnt; ?></span>
										<p>
                                            <?= $arItem['NAME']; ?>
										</p>
									</div>
								</div>
							</div>
                        <? } ?>
                        <?

                        $cnt++;
                        $globalCnt++;
                    } ?>
				</div>
                <?

            } ?>
			<?if ($preview) {?>
			<div class="section-title balance-title tablet-small_visible"><?= $preview;?></div>
			<?}?>
		</div>
	</div>
<? } ?>