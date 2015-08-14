<?php
//Получаем id удаляемой записи
$delete_note_id = (int)$_GET["id"];

//Зачитываем необходимые данные из файла конфигов.
$config = parse_ini_file("config.inc.ini");
$db = NewADOConnection($config["dsn"]) or die("ERROR CONNECT");
//Устанавливакм возвпащаемое значение - ассоц.массив
$db->SetFetchMode(ADODB_FETCH_ASSOC);
//Формируем необходимый запрос
$sql_delete = "DELETE FROM news
                      WHERE id = ?";
//Подготавливаем его
$prepared_stat = $db->Prepare($sql_delete,array("id"=>$id));
//Выполняем
$result = $db->Execute($prepared_stat);
//Закрываем соединение с БД
$db->Close();

header("Location: ".$_SERVER['PHP_SELF']);