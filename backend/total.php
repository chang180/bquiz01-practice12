<form action="api/edit_info.php" method="post">
    <h1>進站總人數管理</h1>
    <hr>
    進站總人數：<input type="number" name="total" value="<?=$total['total'];?>"><br>
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>修改確定</button><button type="reset">重置</button>
</form>
