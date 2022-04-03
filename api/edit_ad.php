<?php include_once "db.php";

//依照表單POST傳來的id欄位，使用find自訂函式來取得廣告圖片的紀錄
$ad=find("ad",$_POST['id']);

//取得表單傳來的intro欄位資料
$intro=$_POST['intro'];

update('ad',['intro'=>$intro],['id'=>$_POST['id']]);

//更新完成，導向回廣告頁
to("../backend/?do=ad");

?>