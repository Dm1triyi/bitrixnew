<?
//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Свяжитесь с нами");

?><script type="text/javascript" src="/bitrix/js/main/ajax.js"></script> <?$APPLICATION->IncludeComponent(
	"picom:iblock.element.add.form",
	"template2",
	Array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"COMPONENT_TEMPLATE" => "template2",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "Имя",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "Сообщение",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "Y",
		"ELEMENT_ASSOC" => "PROPERTY_ID",
		"ELEMENT_ASSOC_PROPERTY" => "",
		"GROUPS" => array(0=>"2",),
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "recall",
		"LEVEL_LAST" => "Y",
		"LIST_URL" => "",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "Y",
		"PROPERTY_CODES" => array(0=>"14",1=>"15",2=>"NAME",3=>"PREVIEW_TEXT",),
		"PROPERTY_CODES_REQUIRED" => array(0=>"14",1=>"NAME",),
		"RESIZE_IMAGES" => "Y",
		"SEF_FOLDER" => "/",
		"SEF_MODE" => "Y",
		"STATUS" => "ANY",
		"STATUS_NEW" => "NEW",
		"USER_MESSAGE_ADD" => "",
		"USER_MESSAGE_EDIT" => "",
		"USE_CAPTCHA" => "N"
	)
);?>
<?//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?><?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>