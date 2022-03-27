<?php echo Asset::css('color.css'); ?>

<div class="colors">
    <table id="small_table">
        <?php
        for($x=0; $x<$count; $x++){
            echo "<tr><td>color</td><td>color</td></tr>";
        }
        ?>
    
    </table>
    <table id="large_table">
        <?php
        for($row=0; $row<$size+1; $row++){
            echo "<tr>";
            for($col=0; $col<$size+1; $col++){
                echo "<td>.$row.$col.</td>";
            }
            echo "</tr>";
        }
        ?>
    
    </table>
    
    <?php
        echo "<p>Selected a ".$size." by ".$size." grid!<p>";
        echo "<p>Selected a Palette of ".$count." Colors!<p>";
    ?>

    Color Coordinator dummy page....
</div>
