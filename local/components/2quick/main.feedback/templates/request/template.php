<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?>
    <script>
        $('#application-accepted').modal('show');
        $('input[type="tel"]').inputmask("+7 (999) 999 99 99", {
            "clearIncomplete": true,
            showMaskOnHover: false,
        });
        $('.form-control').focus(function () {
            $(this).closest('.form-group').addClass('focus');
        });
        $('.form-control').blur(function () {
            if ($(this).val().length == 0) {
                $(this).closest('.form-group').removeClass('focus');
            }
        });
        $('form').find('.form-control').each(function () {
            if ($(this).val().length > 1) {
                $(this).closest('.form-group').addClass('focus');
            }
        });
        lazyLoad($('.form-section'));
        <?if ($arParams['USE_CAPTCHA'] == 'Y') {?>
        grecaptcha.ready(function() {
            grecaptcha.execute('<?php echo SITE_KEY;?>', {action: 'homepage'}).then(function(token) {
                $('[name="g-recaptcha-response"]').each(function () {
                    $(this).val(token);
                })
            });
        });
        <?}?>
    </script>
    <?
}
?>

<div class="form-section">
	<div class="row">
		<div class="col-md-6  form-section_img">
			<img data-src="<?= SITE_TEMPLATE_PATH;?>/img/static/women.jpg" alt="alt">
		</div>
		<div class="col-md-6 right-column">
			<div class="form-section_content">
				<div class="section-title"><?= GetMessage('REQUEST_TITLE');?></div>
				<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="static-form">
                    <?=bitrix_sessid_post()?>
                    <?if ($arParams['USE_CAPTCHA'] == 'Y') {
                        ?>
						<input type="hidden" name="g-recaptcha-response" />
                        <?
                    }?>
					<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
					<input type="hidden" name="submit" value="<?=GetMessage("SUBMIT")?>">
					<div class="form-group">
						<input type="text" class="form-control requiredField callback-name" name="NAME">
						<label class="form-label"><?= GetMessage('NAME');?></label>
					</div>
					<div class="form-group">
						<input type="email" class="form-control requiredField callback-email" name="EMAIL">
						<label class="form-label"><?= GetMessage('EMAIL');?></label>
					</div>
					<div class="form-group">
						<input type="tel" class="form-control requiredField callback-phone" name="PHONE">
						<label class="form-label"><?= GetMessage('PHONE');?></label>
					</div>
					<div class="form-footer">
						<label class="unified-checkbox">
							<input value="" type="checkbox" name="checkbox" checked required>
							<span class="checkbox-text"><?= GetMessage('PRIVACY', ['#URL#' => '/privacy-policy/']);?> </span>
						</label>
						<input type="submit" class="static-form_submit main-mod_btn js_form-submit" value="<?= GetMessage('JOIN');?>">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
