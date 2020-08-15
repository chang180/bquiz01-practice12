<form action="api/submenu.php" method="post">
    <h1>編輯次選單</h1>
    <hr>
    <table id="more">
        <tr>
            <td>次選單名稱</td>
            <td>次選單連結網址</td>
            <td>刪除</td>
        </tr>
        <?php
        include_once "../base.php";
        $parent=$_GET['id'];
        $subs=$Menu->all(['parent'=>$parent]);
        foreach($subs as $s){
        ?>
        <tr>
            <td><input type="text" name="name[]" value="<?=$s['name'];?>"></td>
            <td><input type="text" name="text[]" value="<?=$s['text'];?>"></td>
            <td><input type="checkbox" name="del[]" value="<?=$s['id'];?>"></td>
            <input type="hidden" name="id[]" value="<?=$s['id'];?>">
        </tr>
        <?php
        }
        ?>
    </table>
    <input type="hidden" name="parent" value="<?=$parent;?>">
    <button>修改確定</button>
    <button type="reset">重置</button>
    <button type="button" onclick="moreOpt()">更多次選單</button>
</form>
<script>
    function moreOpt(){
        let el=`
        <tr>
            <td><input type="text" name="name2[]"></td>
            <td><input type="text" name="text2[]"></td>
            <td></td>
        </tr>`;
    $("#more").append(el);
    }
    
</script>