//регистрируем обработчик
AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("MyClass", "OnAfterIBlockElementAddHandler"));

class MyClass{
    //создаем обработчик события "OnAfterIBlockElementAdd"
    function OnAfterIBlockElementAddHandler(&$rFields){
        if ($arFields["IBLOCK_ID"] == 6){
            $arSend = array(
                'TEXT'=>$arFields['AUTHOR'].'написал'.$arFields['NAME']);
                CEvent::Send('FEEDBACK',SITE_ID,$arSend)
        }
    }
}