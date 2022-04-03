<h1>問卷列表</h1>
<?php
$subjects=all('topics');
echo "<div class=>";
foreach ($subjects as $key => $value) {
    if(rows('options',['topic_id'=>$value['id']]) > 0){
    echo "<div class='card'>";
    //題目
    //有登入的會員才能使用投票功能
    if(isset($_SESSION['user'])){
        //標題
        echo "<h3 class='card-text col-md-8' href='index.php?do=vote&id={$value['id']}'>";
        echo $value['topic'];
        echo "</h3>";
        //總投票數顯示
        $count=q("select sum(`count`) as '總計' from `options` where `topic_id`='{$value['id']}'");
        echo "<span class='d-inline-block col-md-2 text-center'>";
        echo "目前票數 ".$count[0]['總計'];
        echo "</span>";
        //投票
        echo "<span><a href='?do=vote&id={$value['id']}' class='d-inline-block col-md-2 text-center'>";
        echo "<button class='btn btn-primary'>參與投票</button>";
        echo "</a></span>";
    }else{
        
        echo "<span class='d-inline-block col-md-8'>".$value['topic']."</span>";
    }
    
    
    //看結果按鈕
    echo "<a href='?do=vote_result&id={$value['id']}' class='d-inline-block col-md-2 text-center'>";
    echo "<button class='btn btn-primary'>觀看結果</button>";
    echo "</a>";

    echo "</div>";
}
}
echo "</div>";

?>
