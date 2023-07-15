<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $current = basename($_SERVER['PHP_SELF'], ".php");
    if ($current === 'index') {
        $title = 'Pokémon Go';
    }
    if ($current === 'shop') {
        $title = 'Web Store';
    }
    if ($current === 'about_us') {
        $title = 'About Us';
    }
    ?>
    <title><?= $title ?></title>
    <link href="https://fonts.cdnfonts.com/css/pokemon-solid" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="https://lh3.googleusercontent.com/Uzo_GQXZXc1Nsj7OY3dbfRDam0TjTzV4A1dhgSYLzkdrygVRDZgDMv7JME4kEAkS0UFa0MdJevzXynIlc7X6yXRSEV2-XkrRpX1QzJts9-a6=e365-s0">

</head>

<body>
    <div class="container">
        <div id="navbar">
            <header>
                <nav>
                    <ul>
                        <li><a href="login.php"><img src="images/logo.png" id="logo"> </a> </li>
                        
                        <li class="<?php if ($current === 'index') {
                                        echo 'active';
                                    } ?>"> <a href="index.php">HOME</a></li>
                        <li class="<?php if ($current === 'shop') {
                                        echo 'active';
                                    } ?>">
                            <a href="shop.php">SHOP</a>
                        </li>
                        <li class="<?php if ($current === 'about_us') {
                                        echo 'active';
                                    } ?>">
                            <a href="about_us.php">ABOUT</a>
                            
                        </li>
                    </ul>
                </nav>
                <!-- <img src="menu.png" class="menu-icon"> -->
            </header>
        </div>