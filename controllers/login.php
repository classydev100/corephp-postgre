<?php
    $conn = db_con();
    if(isset($_POST['username']) && $_POST['password']){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $res = pg_query($conn,("Select * from users  where username='$username' and password='$password'"));
        if(pg_num_rows($res) > 0){
            $user = pg_fetch_array($res);
            $_SESSION['id']=$user['id'];
            $_SESSION['username']=$user['username'];
            header("Location: /admin");
        } else {
            $msg = 'Login Failed';
            require_once ('views/login.php');
        }
    } else {
        header("Location: /login");
    }
