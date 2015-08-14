<?php
//Зачитываем необходимые данные из файла конфигов.
$config = parse_ini_file("inc/config.inc.ini");
//Соединяемся с БД
$db = NewADOConnection($config["dsn"]) or die("ERROR CONNECT");
//Устанавливакм возвпащаемое значение - ассоц.массив
$db->SetFetchMode(ADODB_FETCH_ASSOC);
//Формируем необходимый запрос
$sql_get = "SELECT  *
          FROM news";
//Подготавливаем его
$prepared_stat = $db->Prepare($sql_get);
//Выполняем
$result = $db->Execute($prepared_stat);
//Закрываем соединение с БД
$db->Close();

//Передаем выборку шаблонизатору
$smarty->assign("data",$result->GetRows());
//Проверяем существует ли шаблон
if( !$smarty->templateExists('list.tpl')){
    exit('Такого шаблона не существует');
}else{
    $smarty->display("list.tpl");
}







