<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
    </head>
    <body>
        <h2>글을 쓰려면 로그인 하십시오.</h2>
        <hr />
        <?php if(!isset($_SESSION['ID']) || !isset($_SESSION['PW'])) { ?>
        <form method="post" action="check.php">
            <p>아이디: <input type="text" name="ID" /></p>
            <p>비밀번호: <input type="password" name="PW" /></p>
            <p><input type="submit" value="로그인" onclick="location.href='check.php'" /></p>
        </form>
    </body>
</html>
