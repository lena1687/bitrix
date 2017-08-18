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
        ?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
    }
    ?>

    <form class="feedback-form d-inline-block float-left w-100" action="<?=POST_FORM_ACTION_URI?>" method="POST">
    <?=bitrix_sessid_post()?>
        <h2 class="text-left">Let's talk</h2>
        <div class="row">
            <div class="col-12">
                <div class="form-fullname w-100">
                    <div class="form-name d-inline-block w-100">
                        <input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" placeholder="<?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?> *<?endif?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-tel d-inline-block w-100">
                    <input type="text" name="user_tell" value="<?=$arResult["TELL"]?>" placeholder="<?=GetMessage("MFT_TELL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("TELL", $arParams["REQUIRED_FIELDS"])):?> *<?endif?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-details">
                    <div class="form-email d-inline-block w-100">
                        <input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>" placeholder="<?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?> *<?endif?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-comment d-inline-block w-100">
                    <textarea name="MESSAGE" rows="5" cols="40" placeholder="<?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?> *<?endif?>"><?=$arResult["MESSAGE"]?></textarea>
                </div>
            </div>
        </div>
        <?if($arParams["USE_CAPTCHA"] == "Y"):?>
        <div class="mf-captcha">
            <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
            <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
            <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
            <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
            <input type="text" name="captcha_word" size="30" maxlength="50" value="">
        </div>
        <?endif;?>
        <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
        <div class="row">
            <div class="col-12 text-sm-center text-center">
                <div class="form-button float-md-right float-sm-none d-inline-block">
                    <input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
                </div>
            </div>
        </div>
    </form>
