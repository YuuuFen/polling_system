<?php include_once "db.php";
/* echo "tmp_name=>".$_FILES['name']['tmp_name']."<br>";
echo "filename=>".$_FILES['name']['name']."<br>";
echo "intro=>".$_POST['intro']."<br>"; */

//先判斷是否有檔案上傳成功的動作
if(!empty($_FILES['name']['tmp_name'])){

    //取得表單傳來的intro欄位資料
    $intro=$_POST['intro'];

    //取得上傳檔案的原始檔名
    $oriFilename=$_FILES['name']['name'];

    // time + md5 雜湊函數，產生新檔名
    $filename=md5(time());

    $subname=explode(".",$_FILES['name']['name'])[1];
    
    $newFileName=$filename.".".$subname;

    //將檔案從暫存路徑搬移至指定路徑
    move_uploaded_file($_FILES['name']['tmp_name'],'../image/'.$filename);

    //使用insert自訂函式來完成新增廣告圖片的動作
    insert('ad',['name'=>$filename,'sh'=>0,'intro'=>$intro]);

}

//新增完畢，導向回廣告管理頁面
to("../backend/index_admin.php");

?>