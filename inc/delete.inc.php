<?php
//�������� id ��������� ������
$delete_note_id = (int)$_GET["id"];

//���������� ����������� ������ �� ����� ��������.
$config = parse_ini_file("config.inc.ini");
$db = NewADOConnection($config["dsn"]) or die("ERROR CONNECT");
//������������� ������������ �������� - �����.������
$db->SetFetchMode(ADODB_FETCH_ASSOC);
//��������� ����������� ������
$sql_delete = "DELETE FROM news
                      WHERE id = ?";
//�������������� ���
$prepared_stat = $db->Prepare($sql_delete,array("id"=>$id));
//���������
$result = $db->Execute($prepared_stat);
//��������� ���������� � ��
$db->Close();

header("Location: ".$_SERVER['PHP_SELF']);