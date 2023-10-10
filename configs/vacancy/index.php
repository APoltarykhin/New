<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("vacancy");
?><?$APPLICATION->IncludeComponent(
	"artem:vacancy.list",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"HL_BLOCK" => "2",
		"HL_BLOCK_FIELDS_DESCRIPTION" => "UF_VACANCY_DESCRIPTION",
		"HL_BLOCK_FIELDS_NAME" => "UF_NAME_VACANCY",
		"HL_BLOCK_FIELDS_PICTURE" => "UF_VACANCY_PICTURE"
	)
);?>Text here....<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>