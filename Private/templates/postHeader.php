<?php
    $current_file_name = basename($_SERVER['PHP_SELF']);
    $current_dir = basename(getcwd());
?>
<!DOCTYPE html>
<html lang=en>

<head>
    <title>Antonio Jorda Blog</title>

    
    <link rel="stylesheet" href="../../public/css/main.css">
    <link rel="stylesheet" href="../../public/css/post.css">

    <script defer src='../../public/js/header.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- google Fonts roboto-->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
        <!-- Font Awesome icons-->
        <script src="https://kit.fontawesome.com/9547750bbd.js" crossorigin="anonymous"></script>

        <?php
    //Set scripts and styles depending on the page
    if($current_dir ==='blog'){
        // echo '<link rel="stylesheet" href="../public/css/index.css">';
        echo '<link rel="stylesheet" href="../../public/css/blog.css">';
        echo '<script defer src="../../public/js/blog/blog.js"></script>';

    }else if($current_dir === 'about'){

    }else if($current_dir === 'contact'){

    }else{
        //unknown
    }
    
    ?>
    </head>

<body>
    <header>
        <nav class="navigation-bar">
            <i id="btn-menu" class="fa fa-bars"></i>
            <div id='modal-nav-menu-id' class='modal-nav-menu hidden'>
                <i id="btn-close-modal-menu" class="fas fa-times"></i>
                <ul id="nav-menu-id" class='select-section'>
                    <li  class="active">
                        <a href= '../../blog'>Blog</a>
                    </li>
                    <li>
                    <a href= '../../about'>About</a>
                    </li>
                    <li >
                    <a href='../../contact'>Contact</a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    <?php