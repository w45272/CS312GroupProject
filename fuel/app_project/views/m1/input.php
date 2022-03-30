<?php echo Asset::css('color.css'); ?>
<div class = "input"> 
         <?php echo Form::open(array('action' => 'index.php/colors', 'method' => 'post')); ?>  
         <?php 
            
             if(isset($input_error)){echo "<p>Please enter a number for both item!<p>";}
            
         ?>
         <div class = "form-group"> 
         <?php if(isset($input_error)){echo "<p>Please enter a number for both item!<p>"; }?>
            <?php 
               echo Form::label('Number of Rows/Columns:', 'size'); 
               echo Form::input('size', '', array('type' => 'number', 'min' => '1', 'max' => '26')); 
            ?> 
         </div> 
         
         <div class = "form-group"> 
            <?php 
               echo Form::label('Number of Colors:', 'count'); 
               echo Form::input('count', '', array('type' => 'number', 'min' => '1', 'max' => '10')); 
            ?> 
         </div> 
         
         <?php echo Form::button('frmbutton', 'Submit'); 
         ?> 
         
         <?php 
            echo Form::close(); 
         ?> 
</div> 
