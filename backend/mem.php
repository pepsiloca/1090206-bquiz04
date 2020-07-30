  
<div class="ct"><button onclick="location.href='?do=add_admin'">新增管理員</button></div>

<table class="all ct">
    <tr class="tt">
        <td>帳號</td>
        <td>密碼</td>
        <td>註冊日期</td>
        <td>管理</td>
    </tr>
    <?php
    $mems=$Member->all();
    foreach($mems as $mem){
    ?>
    <tr class="pp">
        <td><?=$mem['name'];?></td>
        <td><?=$mem['acc'];?></td>
        <td><?=$mem['regdate'];?></td>
  
        <td>

        <button onclick="location.href='?do=edit_mem&id=<?=$mem['id'];?>'">修改</button>
        <button onclick="del('member',<?=$mem['id'];?>)">刪除</button>
        <?php
        }
        ?>
        </td>
    </tr>
</table>
<div class="ct"><button onclick="location.href='index.php'">返回</button></div>