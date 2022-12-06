<?
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_after.php");

include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');
global $APPLICATION;
use \Bitrix\Main\Page\Asset;
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");
$APPLICATION->SetTitle("404 Not Found");

?>

<!DOCTYPE html>
<html class="no-js" lang="<?= LANGUAGE_ID ?>">
<head>
	<title><? $APPLICATION->ShowTitle() ?></title>
	<?
    $APPLICATION->ShowHead();
    Asset::getInstance()->addString('<meta content="' . SITE_TEMPLATE_PATH . '/browserconfig.xml" name="msapplication-config" />');
    Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
    Asset::getInstance()->addString('<link href="' . SITE_TEMPLATE_PATH . '/img/favicon.ico" rel="icon" type="image/png" />');
    Asset::getInstance()->addString('<link href="' . SITE_TEMPLATE_PATH . '/img/favicon.png" rel="icon" type="image/png" />');
    Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="100x120" href="' . SITE_TEMPLATE_PATH . '/img/apple-touch-icon.png" />');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/costume.css");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
	?>

</head>
<body>
<!--[if lt IE 10]>
<p class="browsehappy"><br>Вы используете <strong>устаревший</strong> браузер.
	Пожалуйста, <a href="http://browsehappy.com/">обновите его</a> для корректного
	отображения сайтов.</p>
<![endif]-->
<div class="global-wrapper">
	<div class="wrapper-loader">
		<div class="logo-loader_content">
			<div class="logo-loader"></div>
		</div>
		<div class="wrapper_loader-text">
			<span class="loader-text">Погрузитесь в наш мир</span>
		</div>
	</div>
	<main class="main-content">
		<div class="error-section">
			<div class="container">
				<div class="error-number section-title">404</div>
				<p>Извините, такой страницы нет</p>
				<a href="<?= SITE_DIR;?>" class="main-btn">Перейти на главную</a>
			</div>
		</div>
	</main>
</div>
</body>
</html>

<?
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_after.php");
?>

