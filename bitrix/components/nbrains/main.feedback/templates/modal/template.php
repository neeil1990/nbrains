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
<div class="modal fade" id="modalCallBack" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <!-- RD Mailform -->

                <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="/bitrix/services/main/ajax.php?c=nbrains:main.feedback&action=main&mode=class&signedParameters=<?=$this->getComponent()->getSignedParameters()?>">
                    <?=bitrix_sessid_post()?>
                    <div class="row align-items-md-end row-20">
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-name-modal" type="text" name="name" data-constraints="@Required">
                                <label class="form-label" for="contact-name-modal"><?=GetMessage("MFT_NAME")?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-phone-modal" type="text" name="phone" data-constraints="@Required @PhoneNumber">
                                <label class="form-label" for="contact-phone-modal"><?=GetMessage("MFT_PHONE")?></label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message-modal"><?=GetMessage("MFT_MESSAGE")?></label>
                                <textarea class="form-input" id="contact-message-modal" name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                            <button class="button button-block button-primary button-ujarak" name="submit" type="submit"><?=GetMessage("MFT_SUBMIT_MODAL")?></button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="button button-block btn-white-bordered button-ujarak" data-dismiss="modal"><?=GetMessage("MFT_SUBMIT_CLOSE")?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

