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
            <input type='radio' id='radio".$x."' value='".$x."' name='colorChoice'";
            if($x==0) echo "checked";
            echo " >
            <select id='color_select".$x."' name='colors' class='color_select' > 
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
              <svg width='40' height='25'><rect width='40' height='25' id='cBox".$x."'></svg>        
                    </td> 
                    <td><p id='color_list".$x."'></p>  </td>
                  </tr>";
            // JS to ensure unique initial selections from dropdown
            // and add event listeners      
            echo "<script>";
            echo "document.getElementById('color_select".$x."').getElementsByTagName('option')[".$x."].selected = 'selected';";
            echo "document.getElementById('cBox".$x."').style.fill = document.getElementById('color_select".$x."').value;";
            echo "document.getElementById('color_select".$x."').addEventListener('focus', saveValue);";
            echo "document.getElementById('color_select".$x."').addEventListener('change', validateChange);";
            echo "document.getElementById('radio".$x."').addEventListener('change', setChosenColor);";
            echo "var temp".$x."=[]; colorLists.push(temp".$x.");";
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
            for($col=0, $letter='A', $letter2='A'; $col<$size+1; $col++){
                if($row===0 && $col===0){echo "<td> </td>";}
                elseif($row==0){echo "<td> ".$letter2." </td>"; $letter2++;}
                elseif($col==0){echo "<td> $row </td>";}
                else{echo "<td class='none' id=".$letter.$row."> </td>"; $letter++; }
                
            }
            
            echo "</tr>";
        }
        echo "<script>";
        for($row=0; $row<$size+1; $row++){
            for($col=0, $letter='A'; $col<$size+1; $col++){
                if($row==0 && $col==0){;}
                elseif($row==0){;}
                elseif($col==0){;}
                else{echo "document.getElementById('".$letter.$row."').addEventListener('click', tableClick);"; $letter++;}
                
            }
        }
        echo "</script>";
        
        ?>
    
    </table>
   
<div>
        <button onClick="window.print()">Print
        </button>
    </div>
    
</div>
