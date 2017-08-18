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

    <div class="picture-left float-xl-left float-lg-none">
            <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExample" data-slide-to="1"></li>
                    <li data-target="#carouselExample" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">

    <?foreach($arResult["ITEMS"] as $cell=>$arItem):?>
            <div class="carousel-item <?if(!$cell):?>active<?endif;?>">
                <img class="img-responsive" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                     width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                     height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                     alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                     title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                <div class="carousel-caption">
                    <h3><?echo $arItem["NAME"]?></h3>
                    <p><?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                            <?echo $arItem["PREVIEW_TEXT"];?>
                        <?endif;?></p>
                    <?if($arItem['PROPERTIES']['url']['VALUE']):?>
                        <a class="link" href="<?=$arItem['PROPERTIES']['url']['VALUE']?>">Read more</a>
                    <?endif;?>
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role='button' data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden='true'></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role='button' data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden='true'></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


                <?endforeach;?>


                        </div>
                    </div>
                </div>

            <?endif;?>

