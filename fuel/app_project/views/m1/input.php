
<div class = "input"> 
    <?php if(isset($messages) and count($messages)>0){
        echo "<div id='warning'><ul>";
        foreach($messages as $msg){
            echo "<li>.$msg.</li>";
            }
        echo "</ul></div>";}
     ?>


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
