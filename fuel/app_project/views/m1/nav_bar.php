<?php echo Asset::css('nav_bar.css'); ?>

<div class="nav_bar">
<nav >
        <ul>
            <li><?php echo HTML::anchor('index', "Home")?></li> 
            <li><?php echo HTML::anchor('index.php/about', "About")?></li> 
            <li><?php echo HTML::anchor('index.php/colors', "Color Coordinator")?></li>
            <li><?php echo HTML::anchor('index.php/other', "Other")?></li>
        </ul>
</nav>
</div>
