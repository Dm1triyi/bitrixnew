//регистрируем обработчик
AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("MyClass", "OnAfterIBlockElementAddHandler"));

class MyClass{
    //создаем обработчик события "OnAfterIBlockElementAdd"
    function OnAfterIBlockElementAddHandler(&$rFields){
        if ($arFields["IBLOCK_ID"] == 6){
            $arSend = array(
                'TEXT'=>$arFields['AUTHOR'].'написал'.$arFields['NAME']);
                CEvent::Send('FAQ_ADD_ELEMENT',s1,$arSend)
        }
    }
}