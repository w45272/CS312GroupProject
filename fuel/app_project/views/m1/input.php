<?php echo Asset::css('input.css'); ?>
<?php echo Asset::js('input.js'); ?>

<div class = "input"> 
    <?php if(isset($messages) and count($messages)>0){
        echo "<div id='warning'><ul>";
        foreach($messages as $msg){
            echo "<li>.$msg.</li>";
            }
        echo "</ul></div>";}
     ?>


         <?php echo Form::open(array('action' => 'index.php/colors', 'method' => 'post','id'=>'input_form')); ?>  
         <div id="infoText">
         <p>Please select the size of the color coordinate and the number of colors you would like.</p>
         <p>Select between 1 and 26 rows/columns and between 1 and 10 for color options.</p>
         </div>
         <div class = "form-group1"> 
         <?php if(isset($input_error)){echo "<p>Please enter a number for both item!<p>"; }?>
            <?php 
               echo Form::label('Number of Rows/Columns:', 'size'); 
               echo Form::input('size', '', array('id'=>'sizeInput','type' => 'number', 'min' => '1', 'max' => '26')); 
            ?> 
         </div> 
         
         <div class = "form-group2"> 
            <?php 
               echo Form::label('Number of Colors:', 'count'); 
               echo Form::input('count', '', array('id'=>'countInput','type' => 'number', 'min' => '1', 'max' => '10')); 
            ?> 
         </div> 
         
         <?php echo Form::button('frmbutton', 'Submit', array('type' => 'button', 'id'=>'form_submit')); 
         ?> 
         
         <?php 
            echo Form::close(); 
         ?> 
         <script>
            function formSubmit(){
                var w = document.getElementById('warning_msg');
                    if(w != null){w.remove();}
            
                var x = document.getElementById('sizeInput');
                var y = document.getElementById('countInput');
                if(x.value==""){x.insertAdjacentHTML('beforebegin', "<label id='warning_msg'> Please enter a value for size!</p>"); }
                if(y.value==""){y.insertAdjacentHTML('beforebegin', "<label id='warning_msg'> Please choose the number of colors!</p>"); }
                if(x.value !="" && y.value !="") {document.getElementById('input_form').requestSubmit();}
            }
         
            document.getElementById('form_submit').addEventListener('click',formSubmit, true);
         </script>
         
</div> 
