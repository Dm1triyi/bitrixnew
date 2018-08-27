<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Страница вопроса");
$APPLICATION->SetTitle("Title");
?>
Страница вопроса

<?$APPLICATION->IncludeComponent("bitrix:support.faq.element.detail", "template1", Array(
	"IBLOCK_TYPE" => "faq",	// Типы инфоблоков
		"IBLOCK_ID" => "6",	// Список инфоблоков
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"SECTION_ID" => "6",	// ID Секции
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],	// ID Элемента
		"SHOW_RATING" => "Y",	// Включить рейтинг
		"RATING_TYPE" => "like",	// Вид кнопок рейтинга
		"PATH_TO_USER" => "",	// Шаблон пути к странице пользователя
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	),
	false
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>