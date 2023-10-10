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

<div class="main__container_news">
            <div class="main__news">
<div class="news__title">НАШИ ВАКАНСИИ</div>

<?php
     foreach ($arResult as $arItem) {
?>

                <div class="news__items">
                    <div class="news__items_item">
                        <div class="news__items_item-img">
                            <img src="<?=$arItem['PICTURE']['SRC']?>">
                        </div>
                        <div class="news__items_item-text">
                            <div class="items__item-text_title">
                                <?=$arItem['NAME']?>
                            </div>
                            <div class="items__item-text_body">
                                 <?=$arItem['DESCRIPTION']?>
                            </div>
                            <div class="items__item-text_date">
                               <a href="http://192.168.0.156/otklik">
                                  <div class="button_slide slide_right">ОТКЛИКНУТЬСЯ</div>
                               </a>
                            </div>
                        </div>
                    </div>

<?php
        }
        ?>


