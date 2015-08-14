<?php
//Получаем id редактируемой записи
$edit_note_id = (int)$_GET["id"];

//Зачитываем необходимые данные из файла конфигов.
$config = parse_ini_file("config.inc.ini");
//Соединяемся с БД
$db = NewADOConnection($config["dsn"]) or die("ERROR CONNECT");
//Устанавливакм возвпащаемое значение - ассоц.массив
$db->SetFetchMode(ADODB_FETCH_ASSOC);
//Формируем необходимый запрос
$sql_edit = "SELECT *
                   FROM news
                   WHERE id = ?";
//Подготавливаем его
$prepared_stat = $db->Prepare($sql_edit);
//Выполняем
$result = $db->Execute($prepared_stat,array("id"=>$id));
//Записываем результат выборки в переменную (его мы отдадим шаблонизатору)
$old_data = $result->GetRows();


//Далее работаем уже с новыми данными.Проверяем отправлена форма или нет
if($_SERVER["REQUEST_METHOD"] == "POST") {
    //Фильтруем полученные данные
    $title = strip_tags(trim($_POST["title"]));
    $body = strip_tags(trim($_POST["body"]));
    $dt = strip_tags(trim($_POST["calendar"]));

    //Формируем запрос для апдейта записи
    $sql_update = "UPDATE news
                          SET title = ?,
                              body = ?,
                              dt = ?
                          WHERE id = ?";
    //Подготавливаем его
    $prepared_stat = $db->Prepare($sql_update);
    //Выполняем
    $result = $db->Execute($prepared_stat,array("title"=>$title,
                                                 "body"=>$body,
                                                 "dt"=>$dt,
                                                 "id"=>$id));
    //Закрываем соединение с БД
    $db->Close();

    //Перенаправляем форму (чтобы при нажатии F5 повторно не записывалась информация)
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
//Передаем выборку шаблонизатору
$smarty->assign("data",$old_data);
//Проверяем существует ли шаблон
if( !$smarty->templateExists('edit.tpl')){
    exit('Такого шаблона не существует');
}else{
    $smarty->display("edit.tpl");
}