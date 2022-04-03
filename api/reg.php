<?php include_once "db.php";

// 確認帳號可用

//使用insert自訂函式，將$_POST陣列中的使用者註冊資料新增至users資料表
insert('users',$_POST);

?>

<!-- 待修: 跳窗通知 -->
<script> alert('註冊成功，請重新登入'); </script>

<?php 

//新增完畢導向回首頁
to("../index.php");

?>



