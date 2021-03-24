<?php
    if(isset($_POST['username']) && $_POST['password']){

        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $res = pg_query($conn,("Select * from users  where username='$username' and password='$password'"));
        if(pg_num_rows($res) > 0){
            $user = pg_fetch_array($res);
            $_SESSION['id']=$user['id'];
            $_SESSION['username']=$user['username'];
            print_r($_SESSION);
//            header("Location: index.php/admin");
            require_once('controllers/admin.php');
        }

    } else {
        include('views/login.php');
    }
