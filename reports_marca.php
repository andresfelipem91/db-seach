<?php
 $or="";
 $and="";
 $where='';
 if (isset($_POST['or']))$or=$_POST['or'];
 if (isset($_POST['and']))$and=$_POST['and'];
 if ($or) {
   if (isset($_REQUEST['descuento'])) {
   $descuento=$_REQUEST['descuento'];
   if($descuento != ""){
     $where="WHERE a.descuento= '$descuento'";
   }
   
 }
 if (isset($_REQUEST['marca'])) {
   $marca=$_REQUEST['marca'];
   if($marca != ""){
     if($where == ""){
      $where="WHERE   m.id = $marca";  
     }
     else{
        $where="$where OR m.id = '$marca'"; 
      }
    
   }
   
 }
 if (isset($_REQUEST['atributo'])) {
  $atributo=$_REQUEST['atributo'];
  if($atributo != ""){
    if($where == ""){
     $where="WHERE   t.id = $atributo";  
    }
    else{
       $where="$where OR t.id = '$atributo'"; 
     }
   
  }
  
}
 }
 if ($and) {
  if (isset($_REQUEST['descuento'])) {
    $descuento=$_REQUEST['descuento'];
    if($descuento != ""){
      $where="";
    }
    
  }
  if (isset($_REQUEST['marca'])) {
    $marca=$_REQUEST['marca'];
    if($marca != ""){
      if($where == ""){
       $where="";  
      }
      else{
         $where=""; 
       }
     
    }
    
  }
  if (isset($_REQUEST['atributo'])) {
    $atributo=$_REQUEST['atributo'];
    if($atributo != ""){
      if($where == ""){
       $where="";  
      }
      else{
         $where=""; 
       }
     
    }
    
  }
  if(isset($_REQUEST['atributo'])){
   if ($_REQUEST['descuento'] == "" && $_REQUEST['marca']=="" && $_REQUEST['atributo']== "" ) {
    $where="";
    }if ($_REQUEST['descuento'] == $descuento && $_REQUEST['marca']=="" && $_REQUEST['atributo']== "" ) {
    $where="";
    }if ($_REQUEST['descuento'] == $descuento && $_REQUEST['marca']==$marca && $_REQUEST['atributo']== "" ) {
    $where="";
    }if ($_REQUEST['descuento'] == $descuento && $_REQUEST['marca']==$marca && $_REQUEST['atributo']==$atributo ) {
    $where="WHERE a.descuento='$descuento' AND m.id='$marca' AND t.id='$atributo'";
    }if ($_REQUEST['descuento'] == "" && $_REQUEST['marca']==$marca && $_REQUEST['atributo']== $atributo ) {
    $where="";
    }if ($_REQUEST['descuento'] == "" && $_REQUEST['marca']=="" && $_REQUEST['atributo']== $atributo ) {
    $where="";
  }
 }  
  }
  
 

$host="localhost";
  $dbname="ecoinova_bd";
  $username="root";
  $password="";

  $cnx=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
   //construir sql sentence
    $sql="SELECT a.id,p.name as producto_name,m.id,m.name as marca_name,t.id,t.name as atributo_name,a.descuento FROM producto as p JOIN allocation a ON p.id=a.id_producto JOIN marca m ON a.id_marca=m.id JOIN atributos t ON a.id_atributo=t.id $where ORDER BY p.name ASC";
   var_dump($sql);
  //preparar  Sql sentence
    $q=$cnx->prepare($sql);
   // ejecutar sentencia
   $result=$q->execute();
   
  
   $allocation=$q->fetchAll();

   
   //construir sql sentence
$sql="select id,name from producto";
//preparar  Sql sentence
  $q=$cnx->prepare($sql);

  // ejecutar sentencia
  $result=$q->execute();
  $productos=$q->fetchAll();
  $sql="select id,name from marca";
//preparar  Sql sentence
  $q=$cnx->prepare($sql);

  // ejecutar sentencia
  $result=$q->execute();
  $marca=$q->fetchAll();
  $sql="select id,name from atributos";
//preparar  Sql sentence
  $q=$cnx->prepare($sql);

  // ejecutar sentencia
  $result=$q->execute();
  $atributo=$q->fetchAll();
 
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
     <form action="reports_marca.php" class="busqueda" method='post'>
     Marca:
     <select name="marca">
     <?php if($_REQUEST['marca'] == ""){?>
   
             <option value="">Select</option>  
             <option value="1">huawei</option> 
              <option value="2">samsung</option>
              <option value="6">hp</option>
              <option value="3">motorola</option>
              <option value="4">xiaomi</option> 
              <option value="5">sony</option>
 <?php
}else{?>
      <?php if($_SERVER["REQUEST_METHOD"] == "POST"){
        $marca= $_REQUEST['marca'];?> 
        <?php// $arr_marca=array($marca); var_dump($arr_marca); 
    //for ($i=0; $i < count($marca) ; $i++) { 
     //if($marca == $marca){?>
       <option value="<?php echo $marca?>"><?php echo $marca?></option> 
       <option value="">Select</option>  
             <option value="1">huawei</option> 
              <option value="2">samsung</option>
              <option value="6">hp</option>
              <option value="3">motorola</option>
              <option value="4">xiaomi</option> 
              <option value="5">sony</option>
              
      <?php// } ?>        
              
      <?php// } ?>           
      <?php } ?> 
      <?php } ?>       
      </select> <br>
     <!--<select name="marca">-->
     
     
              <!--<option value="">Select</option>
                <?php
                 //for($i=0;$i<count($allocation);$i++){
                ?>
                <option value="<?php //echo $allocation[$i]["id"]?>"><?php //echo $allocation[$i]["marca_name"]?></option>
                <?php
                 //}
                ?>
             
      </select> <br>-->
     <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $descuento = $_REQUEST['descuento'];?>
  Descuento <input type='text' name='descuento' value='<?php echo $descuento ?>' >
<?php }else{?>
  Descuento <input type="text" name="descuento" > 
<?php } ?>
       

      <br>
    <?php
     
   
     for($i=0;$i<count($atributo);$i++){
      ?> 
      
      <input type="radio" value="<?php echo $atributo[$i]['id'] ?> " name="atributo" <?php if($atributo[$i]['id'] == $atributo ) echo "checked" ?> ><?php echo $atributo[$i]['name'] ?>
      
       
       
       
      <!--<input type="radio" value="<?php //echo $atributo[$i]["id"]?>" name="atributo" class="radio"   ><?php //echo $atributo[$i]["name"]?>--> 
    
    
    <?php
     }
    
    ?> <br>
  
     
     <?php
                // for($i=0;$i<count($atributo);$i++){
                ?>
                <!--<input type="radio" value="<?php //echo $atributo[$i]["id"]?>" name="atributo" class="radio"><?php //echo $atributo[$i]["name"]?> -->
                <?php
                 //}
                ?>
     <!--<input type="radio" name="id_atributo" class="radio">color
     <input type="radio"  name="id_atributo" class="radio">capacidad<br> <br>-->
     
     <input type="submit" name="or" value="Search OR">
     <input type="submit" name="and" value="Search AND">

     </form>
    <div class="contacto">
    <header >
        <h1 class="title">Marca</h1>
    </header>
    
    </div>
       <table class="producto">
        <tr>
          <td class="producto">Nombre producto</td>
          <td class="producto">Nombre marca</td>
          <td class="producto">Nombre atributo</td>
          <td class="producto">Descuento</td>
        </tr>
        <?php 
     for ($i=0;$i<count($allocation);$i++){
    ?> 
      <tr>
      <td class="fila">
          <?php echo $allocation[$i]["producto_name"]?>
      </td>
      <td class="fila">
      
      <?php echo $allocation[$i]["marca_name"]?>
      
      
      </td>
      <td class="fila">
      <?php echo $allocation[$i]["atributo_name"]?>
      </td>
      <td class="fila">
      <?php echo $allocation[$i]["descuento"]?>
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