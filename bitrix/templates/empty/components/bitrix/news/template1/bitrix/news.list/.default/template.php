<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<?if($arResult["ITEMS"]):?>
<div class="news-column float-right">
    <?foreach($arResult["ITEMS"] as $cell=>$arItem) : ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <?//=$this->GetEditAreaId($arItem['ID']);?>
        <div class="new clearfix">
            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
            <div class="foto-new">
                <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
                    <img class="foto-new float-left"
                     src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                     alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                     width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                     height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>">
                </a>
            </div>
            <?endif;?>
            <h2 class="title-new">
                <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
                    <?echo $arItem["NAME"]?>
                </a>
            </h2>
            <p class="block-new">
                <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                    <?echo $arItem["PREVIEW_TEXT"];?>
                <?endif;?>
            </p>
            <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                <span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
            <?endif?>
            <div class="button-new float-md-right text-center">
                <a class="d-inline-block text-uppercase border-0 text-center"
                   href="<?echo $arItem["DETAIL_PAGE_URL"]?>">Read more
                </a>
            </div>
        </div>
    <?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
<?endif;?>