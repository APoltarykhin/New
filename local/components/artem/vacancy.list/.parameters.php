<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
    die();
}

use Bitrix\Main\Loader;

Loader::includeModule('highloadblock');

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;



$arHlBlocksList = [];

$hlblockIterator = HL\HighloadBlockTable::getList();
while ($hlblock = $hlblockIterator->fetch()){
    $arHlBlocksList[$hlblock['ID']] = '[' . $hlblock['ID'] . ']' .$hlblock['NAME'];;
}

if (!empty($arCurrentValues['HL_BLOCK'])) {
    $hlblockId = $arCurrentValues['HL_BLOCK'];
    $hlblock = HL\HighloadBlockTable::getById($hlblockId)->fetch();
    $hlEntity = HL\HighloadBlockTable::compileEntity($hlblock);
    $hlFields = $hlEntity->getFields();

    foreach ($hlFields as $fieldName => $field) {
        $arHlBlocksFields[$fieldName] = $fieldName;
    }
}



$arComponentParameters = [
    "GROUPS" => [],
    "PARAMETERS" => [
        'HL_BLOCK' => [
            'PARENT' => 'BASE',
            'NAME' => GetMessage('HL_BLOCK_LIST'),
            'TYPE' => 'LIST',
            'VALUES' => $arHlBlocksList,
            'REFRESH' => 'Y',
        ],
        "HL_BLOCK_FIELDS_NAME" => [
            'PARENT' => 'BASE',
            'NAME' => 'Поле с названием вакансии',
            'TYPE' => 'LIST',
            'VALUES' => $arHlBlocksFields,
            'REFRESH' => 'N',
        ],
        "HL_BLOCK_FIELDS_PICTURE" => [
            'PARENT' => 'BASE',
            'NAME' => 'Поле картинка вакансии',
            'TYPE' => 'LIST',
            'VALUES' => $arHlBlocksFields,
            'REFRESH' => 'N',
        ],
        "HL_BLOCK_FIELDS_DESCRIPTION" => [
            'PARENT' => 'BASE',
            'NAME' => 'Поле с описанием вакансии',
            'TYPE' => 'LIST',
            'VALUES' => $arHlBlocksFields,
            'REFRESH' => 'N',
        ],
        "CACHE_TIME" => [
            'DEFAULT' => '3600',
        ],
    ],
];
