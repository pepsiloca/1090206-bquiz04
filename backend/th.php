<h2 class="ct">商品分類</h2>
<div class="ct">新增大分類<input type="text" name="big" id="big"><button onclick="addBig()">新增</button></div>
<div class="ct">
新增中分類<select name="mid" id="mid"></select>
<input type="text" name="mid_name" id="mid_name"><button onclick="addMid()">新增</button>

</div>
<table class="all type-list"></table>

<script>
getTypeList()
getBigOption()


function addBig(){
    $.post("api/add_big.php",{'name':$("#big").val(),'parent':0},function(){
        getBigOption()
        getTypeList()
    })
}


function edit(id){
    let newName=prompt("請輸入要修改的分類名稱",$("#t"+id).html())
    if(newName!=null){

        $("#t"+id).html(newName);
        $.post("api/save_type",{id,newNeme})
    }
}


function getBigOption(){
    $.get("api/get_big.php",function(options){
        $("#mid").html(options)
    })
}



function addMid(){
    let name=$("#mid_name").val();
    let big=$("#mid").val();

    $.post("aip/save_type.php",{'name':name,'parent':big},function(){
        getBigOption()
        getTypeList()
    })

}


function getTypeList(){
    $.get("api/get_type_list.php",function(list){
        $(".type-list").html(list)
    })
}



</script>