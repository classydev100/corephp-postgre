<?php
    include_once('helper.php');
    require_once "route.php";
    session_start();
    /* Route */
    get('/', function(){
        require_once ('views/cadastro/index.php');
    });

    get('/dashboard', function(){
            if(empty($_SESSION)){
                header("Location: /dashboard/login");
            } else {
                header("Location: /dashboard/admin");
            }
    });


    get('/dashboard/login', function(){
       require_once ('views/login.php');
    });
    get('/dashboard/admin', function(){
        require_once ('controllers/admin.php');
    });
    get('/dashboard/logout', function(){
        require_once ('controllers/logout.php');
    });
    get('/dashboard/visitors', function(){
        require_once ('controllers/visitors.php');
    });

    get('/dashboard/products', function(){
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

    post('/cadastro_save', function(){
       require_once('controllers/products.php');
    });

    any('/404', function(){
        echo 'Not found';
    });
    pg_close($conn);