<?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $price = $_REQUEST['price'];?>
  <?php if($price == 1500000){?>
   <input type="radio" value="<?php echo $price ?>" name="price" class="radio" checked><?php echo $price ?>
    <input type="radio" value="2000000" name="price" class="radio">2000000
    <input type="radio" value="3000000" name="price" class="radio">3000000
    <input type="radio" value="6000000 " name="price" class="radio">6000000 
    <input type="radio" value="60000" name="price" class="radio">60000
    <input type="radio" value="900000000" name="price" class="radio">900000000
    <input type="radio" value="12232343" name="price" class="radio">12232343
    <input type="radio" value="500000" name="price" class="radio">500000 <br>
  <?php }if($price == 2000000 ){?>
    <input type="radio" value="1500000" name="price" class="radio" >1500000
    <input type="radio" value="<?php echo $price ?>" name="price" class="radio" checked><?php echo $price ?>
    <input type="radio" value="3000000" name="price" class="radio">3000000
    <input type="radio" value="6000000 " name="price" class="radio">6000000 
    <input type="radio" value="60000" name="price" class="radio">60000
    <input type="radio" value="900000000" name="price" class="radio">900000000
    <input type="radio" value="12232343" name="price" class="radio">12232343
    <input type="radio" value="500000" name="price" class="radio">500000<br>
 <?php }if($price == 3000000 ){?>
    <input type="radio" value="1500000" name="price" class="radio" >1500000
    <input type="radio" value="2000000" name="price" class="radio">2000000
    <input type="radio" value="<?php echo $price ?>" name="price" class="radio" checked><?php echo $price ?>
    <input type="radio" value="6000000 " name="price" class="radio">6000000 
    <input type="radio" value="60000" name="price" class="radio">60000
    <input type="radio" value="900000000" name="price" class="radio">900000000
    <input type="radio" value="12232343" name="price" class="radio">12232343
    <input type="radio" value="500000" name="price" class="radio">500000<br>
    <?php }if($price == 6000000 ){?>
    <input type="radio" value="1500000" name="price" class="radio" >1500000
    <input type="radio" value="2000000" name="price" class="radio">2000000
    <input type="radio" value="3000000" name="price" class="radio">3000000
    <input type="radio" value="<?php echo $price ?>" name="price" class="radio" checked><?php echo $price ?>
    <input type="radio" value="60000" name="price" class="radio">60000
    <input type="radio" value="900000000" name="price" class="radio">900000000
    <input type="radio" value="12232343" name="price" class="radio">12232343
    <input type="radio" value="500000" name="price" class="radio">500000<br>
    <?php }if($price == 60000 ){?>
    <input type="radio" value="1500000" name="price" class="radio" >1500000
    <input type="radio" value="2000000" name="price" class="radio">2000000
    <input type="radio" value="3000000" name="price" class="radio">3000000
    <input type="radio" value="6000000 " name="price" class="radio">6000000 
    <input type="radio" value="<?php echo $price ?>" name="price" class="radio" checked><?php echo $price ?>
    <input type="radio" value="900000000" name="price" class="radio">900000000
    <input type="radio" value="12232343" name="price" class="radio">12232343
    <input type="radio" value="500000" name="price" class="radio">500000<br>
    <?php }if($price == 900000000 ){?>
    <input type="radio" value="1500000" name="price" class="radio" >1500000
    <input type="radio" value="2000000" name="price" class="radio">2000000
    <input type="radio" value="3000000" name="price" class="radio">3000000
    <input type="radio" value="6000000 " name="price" class="radio">6000000 
    <input type="radio" value="60000" name="price" class="radio">60000
    <input type="radio" value="<?php echo $price ?>" name="price" class="radio" checked><?php echo $price ?>
    <input type="radio" value="12232343" name="price" class="radio">12232343
    <input type="radio" value="500000" name="price" class="radio">500000<br>
    <?php }if($price == 12232343 ){?>
    <input type="radio" value="1500000" name="price" class="radio" >1500000
    <input type="radio" value="2000000" name="price" class="radio">2000000
    <input type="radio" value="3000000" name="price" class="radio">3000000
    <input type="radio" value="6000000 " name="price" class="radio">6000000 
    <input type="radio" value="60000" name="price" class="radio">60000
    <input type="radio" value="900000000" name="price" class="radio">900000000
    <input type="radio" value="<?php echo $price ?>" name="price" class="radio" checked><?php echo $price ?>
    <input type="radio" value="500000" name="price" class="radio">500000<br>
    <?php }if($price == 500000 ){?>
    <input type="radio" value="1500000" name="price" class="radio" >1500000
    <input type="radio" value="2000000" name="price" class="radio">2000000
    <input type="radio" value="3000000" name="price" class="radio">3000000
    <input type="radio" value="6000000 " name="price" class="radio">6000000 
    <input type="radio" value="60000" name="price" class="radio">60000
    <input type="radio" value="900000000" name="price" class="radio">900000000
    <input type="radio" value="12232343" name="price" class="radio">12232343
    <input type="radio" value="<?php echo $price ?>" name="price" class="radio" checked><?php echo $price ?><br>
 <?php } ?>
 <?php }else{?>
    <input type="radio" value="1500000" name="price" class="radio" >1500000
    <input type="radio" value="2000000" name="price" class="radio">2000000
    <input type="radio" value="3000000" name="price" class="radio">3000000
    <input type="radio" value="6000000 " name="price" class="radio">6000000 
    <input type="radio" value="60000" name="price" class="radio">60000
    <input type="radio" value="900000000" name="price" class="radio">900000000
    <input type="radio" value="12232343" name="price" class="radio">12232343
    <input type="radio" value="500000" name="price" class="radio">500000<br>
  
  
 
<?php } ?>

---------------------------------------------------------------------------------------------------
<input type="radio" value="<?php if($atributo==1){echo $atributo; }else{echo "1";} ?>" <?php if($atributo==1){?>checked<?php } ?> name="price" class="radio" ><?php if($atributo==1){echo $atributo; }else{echo "1";} ?>
             <input type="radio" value="<?php if($atributo==2){echo $atributo; }else{echo "2";} ?>" <?php if($atributo==2){?>checked<?php } ?> name="price" class="radio" ><?php if($atributo==2){echo $atributo; }else{echo "2";} ?>
             <input type="radio" value="<?php if($atributo==3){echo $atributo; }else{echo "3";} ?>" <?php if($atributo==3){?>checked<?php } ?> name="price" class="radio" ><?php if($atributo==3){echo $atributo; }else{echo "3";} ?>
             <input type="radio" value="<?php if($atributo==4){echo $atributo; }else{echo "4";} ?>" <?php if($atributo==4){?>checked<?php } ?> name="price" class="radio" ><?php if($atributo==4){echo $atributo; }else{echo "4";} ?>
             <input type="radio" value="<?php if($atributo==5){echo $atributo; }else{echo "5";} ?>" <?php if($atributo==5){?>checked<?php } ?> name="price" class="radio" ><?php if($atributo==5){echo $atributo; }else{echo "5";} ?>