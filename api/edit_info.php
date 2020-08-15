<?php
include_once "../base.php";
$table=$_POST['table'];
switch($table){
    case "bottom":
        $bottom['bottom']=$_POST['bottom'];
        $Bottom->save($bottom);
    break;
    case "total":
        $total['total']=$_POST['total'];
        $Total->save($total);
    break;
}
to("../admin.php?do=$table");