<form action="api/edit_info.php" method="post">
    <h1>頁尾版權管理</h1>
    <hr>
    頁尾版權：<input type="text" name="bottom" value="<?=$bottom['bottom'];?>"><br>
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>修改確定</button><button type="reset">重置</button>
</form>
