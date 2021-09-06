<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($email == 'demo' && $password == 'demo') {
        if (!empty($_POST['remember'])) {
            setcookie('email', $email, time() + 3600);
            setcookie('pass', $password, time() + 3600);
            if (isset($_COOKIE['email'])) {
                echo 'cookie đc lưu là :' . $_COOKIE['email'];
            }
        } else {
            if (isset($_COOKIE["email"])) {
                setcookie("email", "");
            }
            if (isset($_COOKIE["pass"])) {
                setcookie("pass", "");
            }
            echo 'cookie không được lưu';
        }
        echo " <br><a href='login.php'> quay lại </a>";
    } else {
        echo "mật khẩu hoặc user name không tồn tại <a href='login.php'> quay lại </a> ";
    }
} else {
    header("location: login.php");
}
