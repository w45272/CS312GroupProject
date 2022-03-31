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
                            <option value='red'>Red  &#x1f7e5; </option>
                            <option value='orange'>Orange &#x1f7e7</option>
                            <option value='yellow'>Yellow</option>
                            <option value='green'>Green &#x1f7e9</option>
                            <option value='blue'>Blue &#x1f7e6</option>
                            <option value='purple'>Purple &#x1f7ea</option>
                            <option value='grey'>Grey &#x1f532</option>
                            <option value='brown'>Brown &#x1f7eb</option>
                            <option value='black'>Black &#x1f533</option>
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
