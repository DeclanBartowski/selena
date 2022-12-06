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
<div class="contact-section">
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
		<h1 class="line-title"><?$APPLICATION->ShowTitle(false);?></h1>
		<?if ($arResult['~PREVIEW_TEXT']) {?>
		<span class="top-text"><?= $arResult['~PREVIEW_TEXT']?></span>
		<?}?>
		<?if ($arResult['PROPERTIES']['MAP']['VALUE']) {
			$coordinates = explode(',', $arResult['PROPERTIES']['MAP']['VALUE']);
			?>
			<div id="map"></div>
			<script>
                if ($('#map').length) {

                    function showYaMaps() {
                        var script = document.createElement("script");
                        script.type = "text/javascript";
                        script.src = "https://api-maps.yandex.ru/2.1/?lang=ru_RU";
                        document.getElementById("map").appendChild(script);
                        script.onload = function () {
                            ymaps.ready(init);
                            var myMap,
                                myPlacemark;

                            function init() {
                                myMap = new ymaps.Map("map", {
                                    center: [parseFloat(<?= $coordinates[0];?>), parseFloat(<?= $coordinates[1];?>)],
                                    zoom: 16,
                                    behaviors: ['default', 'scrollZoom'],
                                });
                                myMap.behaviors.disable('scrollZoom');
                                myMap.controls.remove('geolocationControl');
                                myMap.controls.remove('searchControl');
                                myMap.controls.remove('trafficControl');
                                myMap.controls.remove('typeSelector');
                                myMap.controls.remove('fullscreenControl');
                                myMap.controls.remove('rulerControl');
                                myMap.behaviors.disable('scrollZoom');
                                myMap.geoObjects.add(new ymaps.Placemark([parseFloat(<?= $coordinates[0];?>), parseFloat(<?= $coordinates[1];?>)], {
                                    balloonContent: '<?= $arResult['PROPERTIES']['OFFICE_ADRESS']['VALUE'];?> ',
                                }, {
                                    iconLayout: 'default#image',
                                    iconImageHref: '<?= SITE_TEMPLATE_PATH;?>/img/icons/marker.svg',
                                    iconImageSize: [42, 54],
                                }));
                            }
                        }
                    }

                    showYaMaps();
                }
			</script>
		<?}?>
		<div class="row">
			<div class="col-lg-6 col-md-5">
				<ul class="contact-list">
					<?if ($arResult['PROPERTIES']['WORK_TIME']['VALUE']) {?>
					<li>
						<span class="subtitle"><?= $arResult['PROPERTIES']['WORK_TIME']['NAME'];?></span>
						<span class="contact-item">
							<span class="ico-clock"></span>
							<?= $arResult['PROPERTIES']['WORK_TIME']['VALUE'];?>
						</span>
					</li>
					<?}?>
                    <?if ($arResult['PROPERTIES']['OFFICE_ADRESS']['VALUE']) {?>
					<li>
						<span class="subtitle"><?= $arResult['PROPERTIES']['OFFICE_ADRESS']['NAME'];?></span>
						<span class="contact-item">
							<span class="ico-adress">
								<span class="path1"></span>
								<span class="path2"></span>
							</span>
							<?= $arResult['PROPERTIES']['OFFICE_ADRESS']['VALUE'];?>
						</span>
                        <?if ($arResult['PROPERTIES']['SHOW_MAP']['VALUE']) {?>
							<a href="<?= $arResult['PROPERTIES']['SHOW_MAP']['VALUE'];?>" class="show-map_btn" target="_blank"><?= GetMessage('SHOW_ON_MAP')?></a>
						<?}?>
					</li>
                    <?}?>
				</ul>
			</div>
			<div class="col-lg-6 col-md-7 right-column">
				<ul class="contact-list contact-list_right">
                    <?if ($arResult['PROPERTIES']['NUMBER_PHONE']['VALUE']) {?>
					<li>
						<span class="subtitle"><?= $arResult['PROPERTIES']['NUMBER_PHONE']['NAME'];?></span>
						<span class="contact-item">
							<span class="ico-phone"></span>
							<a href="tel:+<?= preg_replace('~\D~', '', $arResult['PROPERTIES']['NUMBER_PHONE']['VALUE']);?>"><?= $arResult['PROPERTIES']['NUMBER_PHONE']['VALUE'];?></a>
						</span>
					</li>
					<?}?>
                    <?if ($arResult['PROPERTIES']['EMAIL']['VALUE']) {?>
					<li>
						<span class="subtitle"><?= GetMessage('QUESTIONS')?></span>
						<span class="contact-item">
							<span class="ico-email"></span>
							<a href="mailto:<?= $arResult['PROPERTIES']['EMAIL']['VALUE'];?>" class="contact-email"><?= $arResult['PROPERTIES']['EMAIL']['VALUE'];?></a>
						</span>
					</li>
					<?}?>
				</ul>
				<div class="right-cell">
					<a href="#callback-2" data-toggle="modal" class="main-mod_btn"><?= GetMessage('GET_CALL')?></a>
					<?if ($arResult['SOCIALS']) {?>
					<ul class="social-network contact_social-network">
						<?foreach ($arResult['SOCIALS'] as $social) {?>
						<li>
							<a href="<?= $social['PROPERTY_LINK_VALUE']?>" target="_blank">
								<img alt="alt" src="<?= CFile::GetPath($social['PROPERTY_ICON_VALUE']);?>">
							</a>
						</li>
						<?}?>
					</ul>
					<?}?>
				</div>
			</div>
		</div>
	</div>
</div>