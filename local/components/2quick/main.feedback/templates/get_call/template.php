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
        $('#callback-2').modal('hide');
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

<div class="modal-content">
	<button class="close" data-dismiss="modal" type="button"><span class="ico-close"></span></button>
	<div class="section-title popup-title"><?= GetMessage('CALL_TITLE');?></div>
	<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="callback-form">
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
			<input type="tel" class="form-control requiredField callback-phone"  name="PHONE">
			<label class="form-label"><?= GetMessage('PHONE');?></label>
		</div>
		<div class="popup-policy">
			<label class="unified-checkbox">
				<input value="" type="checkbox" name="checkbox" checked required>
				<span class="checkbox-text"><?= GetMessage('PRIVACY', ['#URL#' => '/privacy-policy/']);?></span>
			</label>
		</div>
		<div class="wrapper_popup-form_submit main-btn">
			<?= GetMessage('SUBMIT')?> <span class="ico-arrow"></span>
			<input type="submit" class="popup-form_submit js_form-submit" value="">
		</div>
	</form>
</div>
