<?php echo Asset::css('color.css'); ?>
<?php echo Asset::js('colors.js'); ?>
    

<div class="colors">
    <table id="small_table">
        <col class="small_col_one">
        <col class="small_col_two">
        <thead>
        </thead>
        <?php
        for($x=0; $x<$count; $x++){
            echo "<tr><td>
            
            <p id='warning".$x."' hidden >Please Choose an unused color! </p> 
            <select id='color_select".$x."' name='colors' class='color_select'> 
                            <option value='red'>Red</option>
                            <option value='orange'>Orange</option>
                            <option value='yellow'>Yellow</option>
                            <option value='green'>Green</option>
                            <option value='blue'>Blue</option>
                            <option value='purple'>Purple</option>
                            <option value='grey'>Grey</option>
                            <option value='brown'>Brown</option>
                            <option value='black'>Black</option>
                            <option value='teal'>Teal</option>
                           </select>
                            
                    </td>
                    <td> </td>
                  </tr>";
            // JS to ensure unique initial selections fromo dropdown      
            echo "<script>";
            echo "document.getElementById('color_select".$x."').getElementsByTagName('option')[".$x."].selected = 'selected';";
            echo "document.getElementById('color_select".$x."').addEventListener('focus', saveValue);";
            echo "document.getElementById('color_select".$x."').addEventListener('change', validateChange);";
            echo "</script>";
        }
        ?>
    
        
        
    </table>
    
    <p></p>
    <p></p>
    <p></p>
    
    <table id="large_table">
        <?php
        for($row=0; $row<$size+1; $row++){
            echo "<tr>";
            for($col=0, $letter='A'; $col<$size+1; $col++){
                if($row==0 && $col==0){echo "<td> </td>";}
                elseif($row==0){echo "<td> $letter </td>"; $letter++;}
                elseif($col==0){echo "<td> $row </td>";}
                else{echo "<td> </td>";}
            }
            echo "</tr>";
        }
        ?>
    
    </table>
   
<div>
        <button onClick="window.print()">Print
        </button>
    </div>
    
</div>
