<?php echo Asset::css('nav_bar.css'); ?>

<div class="nav_bar">
<nav >
        <ul>
            <li><?php echo HTML::anchor('project/index', "Home")?></li> 
            <li><?php echo HTML::anchor('project/about', "About")?></li> 
            <li><?php echo HTML::anchor('project/colors', "Color Coordinator")?></li>
            <li><?php echo HTML::anchor('project/other', "Other")?></li>
        </ul>
</nav>
</div>
