<form action="api/upload.php" method="post" enctype="multipart/form-data">
    <h1 class="ct">更換圖片</h1>
    <hr>
    圖片：<input type="file" name="name"><br>
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>更新</button><button type="reset">重置</button>
</form>