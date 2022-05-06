<?php echo Asset::css('editColor.css'); ?>
<?php echo Asset::js('editColor.js'); ?>

<link rel="stylesheet" href="https://unpkg.com/huebee@2/dist/huebee.min.css">
<script src="https://unpkg.com/huebee@2/dist/huebee.pkgd.min.js"></script>


<div class="colorEdit">
    <p>Current Colors:</p>
    
    
    <?php echo Form::open(array('action' => 'index.php/updateColors', 'method' => 'post','id'=>'edit_form')); ?>  
         <div class = "form-group1"> 
            <?php
                $Ccount = 0;
                foreach($colors as $key=>$value){
                    $Ccount++;
                    echo "<div>";
                    echo Form::label("Color ".$Ccount.":", "color".$count); 
                    echo Form::input("color".$Ccount, $value, array('id'=>"color".$Ccount,'class' => 'text-input', 'data-huebee' => '{"className":"light-picker"}' ));
                    echo Form::label("Name:", "cName".$Ccount);
                    echo Form::input('cName'.$Ccount, $key, array('id'=>'cName'.$Ccount,'type' => 'text'));
                    echo "</div>";
                
                }
                echo Form::input("colorCount", $Ccount, array('id'=>'colorCount', 'type'=>'hidden'));
                echo Form::input("size", $size, array('id'=>'size', 'type'=>'hidden'));
                echo Form::input("count", $count, array('id'=>'count', 'type'=>'hidden'));

             ?>
         </div> 
         
         <?php echo Form::button('frmbutton', 'Submit', array('type' => 'button', 'id'=>'edit_submit')); 
         ?> 
         
         <?php 
            echo Form::close(); 
         ?>
         <script> 
        document.getElementById('edit_submit').addEventListener('click',editSubmit, true);
        </script>

</div>
