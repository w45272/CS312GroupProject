<?php echo Asset::css('print.css'); ?>

<div class="print">
    <table id="small_table">
        <col class="small_col_one">
        <col class="small_col_two">
        <thead>
            <th>Select A Color</th><th>Painted Locations</th>
        </thead>
        <?php
        
        echo "<script>sessionStorage.setItem('size','".$size."');"; 
        echo "sessionStorage.setItem('count','".$count."');</script>";
         
        for($x=0; $x<$count; $x++){
            echo "<tr><td><p id='color".$x."'></p></td>";
            echo "<td><p id='list".$x."'></p></td>
                  </tr>";

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
        
        ?>
    </table>

    </div>
</div>
<script>
    var colors = JSON.parse(sessionStorage.getItem('colors'));
    for(var x=0; x<sessionStorage.getItem('count');x++){
         document.getElementById('color'+x).innerHTML = colors[x];
    }
    var lists = JSON.parse(sessionStorage.getItem('cList'));
        for(var x=0; x<sessionStorage.getItem('count');x++){
         document.getElementById('list'+x).innerHTML = lists[x].toString();
    }
    
</script>
