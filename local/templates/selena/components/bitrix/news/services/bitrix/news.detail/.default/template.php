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
<div class="services-detailed_section">
	<div class="container">
        <? $APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "breadcrumbs",
            Array(
                "PATH" => "",
                "SITE_ID" => "s1",
                "START_FROM" => "0"
            )
        ); ?>
		<div class="services-detailed_header">
			<h1 class="line-title"><?= $arResult['NAME']; ?></h1>
            <? if ($arResult['PROPERTIES']['PREVIEW_DETAIL']['~VALUE']['TEXT']) { ?>
				<?= $arResult['PROPERTIES']['PREVIEW_DETAIL']['~VALUE']['TEXT'];?>
            <? } ?>
		</div>
	</div>
    <? if ($arResult['DETAIL_PICTURE']['SRC']) { ?>
		<div class="service-banner" style="background-image:url('<?= $arResult['DETAIL_PICTURE']['SRC'] ?>')"></div>
    <? } ?>
	<div class="container">
		<?if ($arResult['SERVICES']) {?>
		<div class="service-price_content">
			<?foreach ($arResult['SERVICES'] as $service) {?>
			<div class="service-price_item">
				<div class="left-column">
					<div class="item-header">
						<span class="item-title"><?= $service['NAME'];?></span>
						<?if ($service['PROPERTY_PRICE_VALUE']) {?>
						<span class="item-price"><?= number_format($service['PROPERTY_PRICE_VALUE'], 0, '.', ' ');?> <span class="rouble">i</span></span>
						<?}?>
					</div>
					<?if ($service['PREVIEW_TEXT']) {?>
					<p><?= $service['PREVIEW_TEXT'];?></p>
					<?}?>
				</div>
				<!--<div class="right-column">
					<a href="" class="main-mod_btn item-btn">Оплатить</a>
				</div>-->
			</div>
			<?}?>
		</div>
		<?}?>
        <?= $arResult['~DETAIL_TEXT']; ?>
	</div>
</div>