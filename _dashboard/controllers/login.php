<?php
    $conn = db_con();
    if(isset($_POST['username']) && $_POST['password']){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql = "Select * from users  where username='$username' and password='$password'";
//        $res = pg_query($conn,($sql));
        $res = mysqli_query($conn, $sql);
//        if(pg_num_rows($res) > 0){
        if(mysqli_num_rows($res) > 0){
//            $user = pg_fetch_array($res);
            $user = mysqli_fetch_array();
            $_SESSION['id']=$user['id'];
            $_SESSION['username']=$user['username'];
            if(!empty($_POST["remember"])) {
                setcookie ("username",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
                setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
            } else {
                if(isset($_COOKIE["username"])) {
                    setcookie ("username","");
                    setcookie ("password","");
                }
            }

            include_once('_dashboard/models/visitors.php');
            header("Location: /dashboard/admin");
        } else {
            $msg = 'Login Failed';
            require_once ('_dashboard/views/login.php');
        }
    } else {
        header("Location: /dashboard/login");
    }
