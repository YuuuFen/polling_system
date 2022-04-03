<h2 class="text-center font-weight-bold">註冊會員</h2>
<form action="./api/reg.php" method="post" id="regForm" autocomplete="off">
    <table class='table m-auto w-auto'>
        <tr>
            <td>帳號：</td>
            <td><input type="text" name="account" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>密碼：</td>
            <td><input type="password" name="password" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>電子郵件：</td>
            <td><input type="email" name="email" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>姓名：</td>
            <td><input type="text" name="name" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>生日：</td>
            <td><input type="date" name="birthday" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>性別：</td>
            <td><input type="radio" name="gender" id="1" value="1">男</td>
            <td><input type="radio" name="gender" id="2" value="2">女</td>
            <td><input type="radio" name="gender" id="3" value="3">其他/不提供</td>
        </tr>
    </table>
</form>


<div class='text-center'><input type="submit" value="確認送出"> </div>