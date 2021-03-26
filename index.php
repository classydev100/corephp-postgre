<?php
    include_once('helper.php');
    require_once "route.php";
    session_start();
    /* Route */
    get('/', function(){
        if(empty($_SESSION)){
            header("Location: /login");
        } else {
            header("Location: /admin");
        }
    });

    get('/login', function(){
       require_once ('views/login.php');
    });
    get('/admin', function(){
        require_once ('controllers/admin.php');
    });
    get('/logout', function(){
        require_once ('controllers/logout.php');
    });
    get('/visitors', function(){
        require_once ('controllers/visitors.php');
    });

    get('/products', function(){
        require_once ('controllers/products.php');
    });
    post('/login', function(){
        require_once ('controllers/login.php');
    });

    post('/visitors_remove', function(){
        require_once('controllers/visitors.php');
    });

    post('/products_remove', function(){
        require_once('controllers/products.php');
    });

    any('/404', function(){
        echo 'Not found';
    });
    pg_close($conn);