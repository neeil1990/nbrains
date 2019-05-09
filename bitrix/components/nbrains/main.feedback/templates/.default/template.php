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
<h3 class="text-center">Написать нам</h3>
<!-- RD Mailform -->
<form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="/bitrix/services/main/ajax.php?c=nbrains:main.feedback&action=main&mode=class&signedParameters=<?=$this->getComponent()->getSignedParameters()?>">
    <?=bitrix_sessid_post()?>
    <div class="row align-items-md-end row-20">
        <div class="col-md-6">
            <div class="form-wrap">
                <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                <label class="form-label" for="contact-name"><?=GetMessage("MFT_NAME")?></label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-wrap">
                <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                <label class="form-label" for="contact-phone"><?=GetMessage("MFT_PHONE")?></label>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-wrap">
                <label class="form-label" for="contact-message"><?=GetMessage("MFT_MESSAGE")?></label>
                <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-wrap">
                <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                <label class="form-label" for="contact-email"><?=GetMessage("MFT_EMAIL")?></label>
            </div>
        </div>
        <div class="col-md-6">
            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
            <button class="button button-block button-primary button-ujarak" name="submit" type="submit"><?=GetMessage("MFT_SUBMIT")?></button>
        </div>
    </div>
</form>
