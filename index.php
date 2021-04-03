<?php
    define('CADASTRO', __DIR__.'/cadastro/views');
    include_once('helper.php');
    require_once "route.php";
    session_start();
    /* Route */
    get('/', function(){

        header("Location: /cadastro");
    });
    get('/cadastro', function(){
        require_once ('_cadastro/controllers/products.php');
    });
    get('/dashboard', function(){
            if(empty($_SESSION)){
                header("Location: /dashboard/login");
            } else {
                header("Location: /dashboard/admin");
            }
    });

    get('/dashboard/login', function(){
       require_once ('_dashboard/views/login.php');
    });
    get('/dashboard/admin', function(){
        require_once ('_dashboard/controllers/admin.php');
    });
    get('/dashboard/logout', function(){
        require_once ('_dashboard/controllers/logout.php');
    });
    get('/dashboard/visitas', function(){
        require_once ('_dashboard/controllers/visitors.php');
    });

    get('/dashboard/cadastros', function(){
        require_once ('_dashboard/controllers/products.php');
    });

    post('/login', function(){
        require_once ('_dashboard/controllers/login.php');
    });

    post('/visitors_remove', function(){
        require_once('_dashboard/controllers/visitors.php');
    });

    post('/products_remove', function(){
        require_once('_dashboard/controllers/products.php');
    });

    post('/cadastro_save', function(){
       require_once('_cadastro/controllers/products.php');
    });

    any('/404', function(){
        echo 'Not found';
    });
    // pg_close($conn);
   mysqli_close($conn);