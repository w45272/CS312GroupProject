<?php echo Asset::css('editColor.css'); ?>
<?php echo Asset::js('editColor.js'); ?>

<link rel="stylesheet" href="https://unpkg.com/huebee@2/dist/huebee.min.css">
<script src="https://unpkg.com/huebee@2/dist/huebee.pkgd.min.js"></script>


<div class="colorEdit">
    <p>Current Colors:</p>
    
    
    <?php echo Form::open(array('action' => 'index.php/updateColors', 'method' => 'post','id'=>'edit_form')); ?>  
         <div class = "form-group1"> 
            <?php
                $count = 0;
                foreach($colors as $key=>$value){
                    $count++;
                    echo "<div>";
                    echo Form::label("Color ".$count.":", "color".$count); 
                    echo Form::input("color".$count, $value, array('id'=>"color".$count,'class' => 'text-input', 'data-huebee' => '{"className":"light-picker"}' ));
                    echo Form::label("Name:", "cName".$count);
                    echo Form::input('cName'.$count, $key, array('id'=>'cName'.$count,'type' => 'text'));
                    echo "</div>";
                
                }
                echo Form::input("colorCount", $count, array('id'=>'colorCount', 'type'=>'hidden'));

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
