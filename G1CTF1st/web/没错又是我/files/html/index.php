<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1977030_tud6wt0lz8c.css">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="form">
        <h2>login(管理员登录)</h2>
        <div class="icon">
            <li><a href="javascript:;"><i class="iconfont icongithub"></i></a></li>
            <li><a href="javascript:;"><i class="iconfont iconcsdn"></i></a></li>
            <li><a href="javascript:;"><i class="iconfont icongongzhonghao"></i></a></li>
        </div>
        <form action="" method='POST'>
            <input type="text" name="username" id=" " placeholder="用户名" require="require">
            <input type="password" name="password" id=" " placeholder="密码" require="require">
            <button type="submit ">login</button>
        </form>
    </div>
<?php
        if(isset($_POST['username']) && isset($_POST['password'])){
            if($_POST['username'] === 'admin' && $_POST['password'] === '123456'){
                echo "<script>alert('p1nging.php');</script>";
            }
        }
    ?>
</body>

</html>
