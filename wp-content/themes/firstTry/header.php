<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>First try Nd7</title>


<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>
</head>

<body>
    <header>
        <img class="dots" src="/wordpress/wp-content/themes/firstTry/Nd7/images/element.svg" alt="illustration">
        <div class="contentWrapper">
         <nav>
                <div class="leftSide">
                     <h1>Knygų Šalis</h1>
                </div>
                <?php
    wp_nav_menu([
        'theme_location'=>'top-menu',
        'container'=>'div',
        'container_class'=>'rightSide',   
     ]);
        ?> 
              
            </nav>
        </div>
    </header>