<?php
//Проверяем отправлена форма или нет
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Фильтруем полученные данные
    $title = strip_tags(trim($_POST["title"]));
    $body = strip_tags(trim($_POST["body"]));
    $dt = strip_tags(trim($_POST["calendar"]));


    //Зачитываем необходимые данные из файла конфигов.
    $config = parse_ini_file("config.inc.ini");
    $db = NewADOConnection($config["dsn"]) or die("ERROR CONNECT");
    //Устанавливакм возвпащаемое значение - ассоц.массив
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    //Формируем необходимый запрос
    $sql_set = "INSERT INTO news (title,
                                dt,
                                body)
              VALUES (?,?,?)";
    //Подготавливаем его
    $prepared_stat = $db->Prepare($sql_set,array("title"=>$title,
                                                 "dt"=>$dt,
                                                 "body"=>$body));
    //Выполняем
    $result = $db->Execute($prepared_stat);
    //Закрываем соединение с БД
    $db->Close();


    //Перенаправляем форму (чтобы при нажатии F5 повторно не записывалась информация)
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
//Проверяем существует ли шаблон
if( !$smarty->templateExists('add.tpl')){
    exit('Такого шаблона не существует');
}else{
    $smarty->display("add.tpl");
}
