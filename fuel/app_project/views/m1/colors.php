<?php echo Asset::css('color.css'); ?>
<?php echo Asset::js('colors.js'); ?>

<div class="colors">
    <table id="small_table">
        <col class="small_col_one">
        <col class="small_col_two">
        <thead>
            <th>Select A Color</th><th>Painted Locations</th>
        </thead>
        <?php
        for($x=0; $x<$count; $x++){
            echo "<tr><td>
            <div class='custom-radios'>
            <input type='radio' id='radio".$x."' value='".$x."' name='colorChoice'";
            if($x==0) echo "checked";
            echo " ><label id='label".$x."' for='radio".$x."' ><span id='span".$x."'>
                <img id='img".$x."'  src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg' alt='Checked Icon' />
                </span></label></div>";
            echo "<select id='color_select".$x."' name='colors' class='color_select' >";
                foreach($colors as $key=>$value){
                    echo "<option value='".$value."'>".$key."</option>";
                
                } 
            echo "</select>
                    </td>
                    <td><p id='color_list".$x."'></p>  </td>
                  </tr>";
            // JS to ensure unique initial selections from dropdown and add event listeners
            echo "<script>";
            echo "document.getElementById('color_select".$x."').getElementsByTagName('option')[".$x."].selected = 'selected';";
            echo "document.getElementById('span".$x."').style.backgroundColor = document.getElementById('color_select".$x."').value;";
            echo "document.getElementById('color_select".$x."').addEventListener('focus', saveValue);";
            echo "document.getElementById('color_select".$x."').addEventListener('change', validateChange);";
            echo "document.getElementById('radio".$x."').addEventListener('change', setChosenColor);";
            echo "document.getElementById('color_select".$x."').addEventListener('change', updateColor);";
            echo "var temp".$x."=[]; colorLists.push(temp".$x.");";
            echo "</script>";
        }
        ?>
    </table>
    <p></p>
    <button class="addEditButton" id="editBtn"> Add/Edit Color Options</button>
    <script>document.getElementById("editBtn").addEventListener('click', editClick);</script>
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
         
    
    <button id="print_submit">Print</button>        
     <script>document.getElementById("print_submit").addEventListener('click', printClick);</script>
    </div>
</div>
