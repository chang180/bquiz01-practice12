<?php
include_once "../base.php";
$table=$_POST['table'];
$db=new DB($table);


if (!empty($_FILES['name']['tmp_name'])) {
    move_uploaded_file($_FILES['name']['tmp_name'], "../img/" . $_FILES['name']['name']);
    $row['name'] = $_FILES['name']['name'];
}

switch ($table) {
    case "title":
        $row['text'] = $_POST['text'];
        $row['sh'] = 0;
        break;
    case "menu":
        $row['name'] = $_POST['name'];
        $row['text'] = $_POST['text'];
        $row['sh'] = 1;
        $row['parent']=0;
        break;
    case "admin":
        $row['acc'] = $_POST['acc'];
        $row['pw'] = $_POST['pw'];
        break;
    case "ad":
        $row['text'] = $_POST['text'];
        $row['sh'] = 1;
        break;
    case "news":
        $row['text'] = $_POST['text'];
        $row['sh'] = 1;
        break;
    default:
        $row['sh'] = 1;
        break;
}
$db->save($row);
to("../admin.php?do=".$table);

