
<?php
$or="";
$and="";
 $where='';
 if (isset($_POST['or']))$or=$_POST['or'];
 if (isset($_POST['and']))$and=$_POST['and'];
 if($or){
   if (isset($_REQUEST['code'])) {
   $code=$_REQUEST['code'];
   if($code != ""){
     $where="WHERE code= '$code'";
   }
   
 }
 if (isset($_REQUEST['state'])) {
   $state=$_REQUEST['state'];
   if($state != ""){
     if($where == ""){
      $where="WHERE  state = '$state'";  
     }
     else{
        $where="$where OR state = '$state'"; 
      }
    
   }
   
 }
 }
 if (isset($_REQUEST['price'])) {
  $price=$_REQUEST['price'];
  if($price != ""){
    if($where == ""){
     $where="WHERE  price = '$price'";  
    }
    else{
       $where="$where OR price = '$price'"; 
     }
   
  }
  
}

 if($and){
 if(isset($_REQUEST['code'])){
   $code=$_REQUEST['code'];
   if($code != ""){
    $where= "";
   }if($_REQUEST['code']== $code  ){
    
    $where="";
    
     
   }
   
   
 }
 

 if(isset($_REQUEST['state'])){
  $state=$_REQUEST['state'];

  if($state != ""){
    $where= "";
  }
if(isset($_REQUEST['price'])){
  $price=$_REQUEST['price'];
  if($_REQUEST['code']== $code  && $_REQUEST['state']== $state && $_REQUEST['price']==$price ){
    
    $where="WHERE  code='$code' AND  state='$state' AND price='$price'";
    
    //$where= "$where AND  state='$state'";
  }if($_REQUEST['code']== $code && $_REQUEST['state']== "" && $_REQUEST['price']==$price ){
      $where="";
    }
    if($_REQUEST['code']== $code && $_REQUEST['state']== "" && $_REQUEST['price']== "" ){
      $where="";
    }
   if($_REQUEST['code']== "" && $_REQUEST['state']== $state && $_REQUEST['price']==$price ){
    $where="";
  }if($_REQUEST['code']== "" && $_REQUEST['state']== "" && $_REQUEST['price']==$price ){
    $where="";
  }if($_REQUEST['code']== "" && $_REQUEST['state']== "" && $_REQUEST['price']=="" ){
    $where="";
  }
  if($_REQUEST['code']!= $code && $_REQUEST['state']!= $state && $_REQUEST['price']==$price){
    $where="";
  }

}
  
  //if($_REQUEST['code']== $code && $_REQUEST['state']== $state ){
    //$where="WHERE  code='$code'";
    //$where= "$where AND  state='$state'";
     
   //}
  
 }
  
    
  
     
   
    
  }    
  
    
  
  
  

 
  
 

$host="localhost";
  $dbname="ecoinova_bd";
  $username="root";
  $password="";

  $cnx=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
   //construir sql sentence
    $sql="SELECT id,name,code,price,state,stock FROM `producto` $where";
   var_dump($sql);
  //preparar  Sql sentence
    $q=$cnx->prepare($sql);
    
   // ejecutar sentencia
   $result=$q->execute();
   
   
   $producto=$q->fetchAll();
// if (count($producto)== 0) {
//  $mensaje="<h1>NO conside el los campos de or</h1>";
// }else{
//  $producto=$q->fetchAll();
 //}
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagen/logo.png" />
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>Ecoinova</title>
</head>
<body>
    <nav>
        <img src="imagen/logo.png" alt="" class="logo">
         <a href="reports_producto.php" class="menu">Producto</a>
         <a href="reports_marca.php"class="menu" >Marca</a>
         <!--<a href="" class="menu">Electrodomesticos</a>    -->
     </nav>  
     <form action="reports_producto.php" method="POST" >
    
     State:
     <select name="state">
     <?php if($_REQUEST['state'] == ""){?>
   
             <option value="">Select</option>  
             <option value="activado">activado</option> 
              <option value="oculto">oculto</option>
              <option value="agotado">agotado</option>
              <option value="preventa">preventa</option>
              <option value="en stock">en stock</option> 
              <option value="contra-pedido">contra-pedido</option>
 <?php
}else{?>
       <option value=""><?php echo $state?></option> 
       <option value="">Select</option>  
             <option value="activado">activado</option> 
              <option value="oculto">oculto</option>
              <option value="agotado">agotado</option>
              <option value="preventa">preventa</option>
              <option value="en stock">en stock</option> 
              <option value="contra-pedido">contra-pedido</option>  
              
      <?php } ?>        
              
              
              
      </select> <br>
      
      
      <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $code = $_REQUEST['code'];?>
 code <input type='text' name='code' value='<?php echo $code ?>' >
<?php }else{?>
  code <input type="text" name="code" > 
<?php } ?>
       

      <br>
    <?php 
    //if($_SERVER["REQUEST_METHOD"] == "POST"){
     //$price= $_REQUEST['price'];?>
     <?php //$arr_precio=array($price); 
    //for ($i=0; $i < count($arr_precio) ; $i++) { 
     //if($price == $arr_precio[$i]){?>
    <!--<input type="radio" value="<?php //if($arr_precio[$i]==1500000){echo $arr_precio[$i]; }else{echo "1500000";} ?>" <?php //if($arr_precio[$i]==1500000){?>checked<?php //} ?> name="price" class="radio" ><?php //if($arr_precio[$i]==1500000){echo $arr_precio[$i]; }else{echo "1500000";} ?>
    <input type="radio" value="<?php //if($arr_precio[$i]==2000000){echo $arr_precio[$i]; }else{echo "2000000";} ?>"<?php //if($arr_precio[$i]==2000000){?>checked<?php //} ?> name="price" class="radio"><?php //if($arr_precio[$i]==2000000){echo $arr_precio[$i];  }else{echo "2000000";} ?>
    <input type="radio" value="<?php //if($arr_precio[$i]==3000000){echo $arr_precio[$i]; }else{echo "3000000";} ?>"<?php //if($arr_precio[$i]==3000000){?>checked<?php //} ?> name="price" class="radio"><?php //if($arr_precio[$i]==3000000){echo $arr_precio[$i];  }else{echo "3000000";} ?>
    <input type="radio" value="<?php //if($arr_precio[$i]==6000000 ){echo $arr_precio[$i]; }else{echo "6000000 ";} ?>"<?php //if($arr_precio[$i]==6000000 ){?>checked<?php //} ?> name="price" class="radio"><?php //if($arr_precio[$i]==6000000 ){echo $arr_precio[$i];  }else{echo "6000000 ";} ?>
    <input type="radio" value="<?php //if($arr_precio[$i]==60000 ){echo $arr_precio[$i]; }else{echo "60000 ";} ?>"<?php //if($arr_precio[$i]==60000 ){?>checked<?php //} ?> name="price" class="radio"><?php //if($arr_precio[$i]==60000 ){echo $arr_precio[$i];  }else{echo "60000 ";} ?>
    <input type="radio" value="<?php //if($arr_precio[$i]==900000000 ){echo $arr_precio[$i]; }else{echo "900000000";} ?>"<?php //if($arr_precio[$i]==900000000 ){?>checked<?php //} ?> name="price" class="radio"><?php //if($arr_precio[$i]==900000000 ){echo $arr_precio[$i];  }else{echo "900000000";} ?>
    <input type="radio" value="<?php //if($arr_precio[$i]==12232343){echo $arr_precio[$i]; }else{echo "12232343";} ?>"<?php //if($arr_precio[$i]==12232343){?>checked<?php //} ?> name="price" class="radio"><?php //if($arr_precio[$i]==12232343){echo $arr_precio[$i];  }else{echo "12232343";} ?>
    <input type="radio" value="<?php //if($arr_precio[$i]==500000){echo $arr_precio[$i]; }else{echo "500000";} ?>"<?php //if($arr_precio[$i]==500000){?>checked<?php //} ?> name="price" class="radio"><?php //if($arr_precio[$i]==500000){echo $arr_precio[$i];  }else{echo "500000";} ?>-->
    
      <?php //} ?>
        
<?php //} ?>
     <?php //}else { ?>
     <input type="radio" value="1500000" name="price" class="radio" >1500000
     <input type="radio" value="2000000" name="price" class="radio">2000000
     <input type="radio" value="3000000" name="price" class="radio">3000000
     <input type="radio" value="6000000 " name="price" class="radio">6000000 
     <input type="radio" value="60000" name="price" class="radio">60000
     <input type="radio" value="900000000" name="price" class="radio">900000000
     <input type="radio" value="12232343" name="price" class="radio">12232343
     <input type="radio" value="500000" name="price" class="radio">500000<br>
     <?php //}?>
    <br>
    
 

     <input type="submit" name="or" value="Search OR">
     <input type="submit" name="and" value="Search AND">
     </form>
     
    <div class="contacto">
    <header >
        <h1 class="title">Producto</h1>
    </header>
    
    </div>
       <table class="producto" >
        <tr>
          <td class="producto">Nombre producto</td>
          <td class="producto">codigo</td>
          <td class="producto">Price</td>
          <td class="producto">state</td>
          <td class="producto">stock</td>
        </tr>
        <?php 
     for ($i=0;$i<count($producto);$i++){
    ?> 
      <tr >
      <td class="fila" >
          <?php echo $producto[$i]["name"]?>
      </td>
      <td class="fila">
      
      <?php echo $producto[$i]["code"]?>
      
      
      </td>
      <td class="fila">
      <?php echo $producto[$i]["price"]?>
      </td>
      <td class="fila">
      <?php echo $producto[$i]["state"]?>
      </td>
      <td class="fila">
      <?php echo $producto[$i]["stock"]?>
      </td>
      
      </tr>
    <?php
     }
    
    ?>
       </table>
     
    
    
    <footer>
       
        <div class="contactenos">
     
         <h3>Contáctenos</h3>
          <h3>ventas@ecoinova.com</h3> 
         <h3>+506 89676096</h3>
        </div>
          <div class="contactenos">
              <h1>Acerca de nuestra tienda</h1>
          <p>Somos una empresa distribuidora de todo tipo de productos, concebida por 
             <br> dos soñadores que buscan satisfacer las necesidades de niños, jóvenes y adultos. </p>
          </div>
          
          <div class="contactenos">
    
         <h1>Secciones</h1>
        <a href="index.html" class="link_pie">Inicio</a> 
         <a href="terminos.html" class="link_pie">TÉRMINOS Y CONDICIONES DE USO</a>
       <a href="contactenos.html" class="link_pie">Contáctenos</a>  
          </div>
     



    </footer>
</body>
</html>