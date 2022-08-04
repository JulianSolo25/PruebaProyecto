<?php



/*
$texto = 'Hola mundo';
if (isset($_GET["nombre"])==false){
  
   echo "Nombre No existe" ;
    
}else{
    echo $texto;
    
    echo '<Br>'.$_GET["nombre"];
    
    echo '<Br>'.$texto.' '.$_GET["nombre"];
    
}*/





function Validar(){
    
    $contador=0;
    $nombre="";
    $edad=0;
    $Sexo="";
    
    if($_GET["nombre"]){
        
        $nombre=$_GET["nombre"];
        $contador=1;
    }
    
    if($_GET["edad"]){
        
        $edad=$_GET["edad"];
        $contador+=1;
    }
    
    if($_GET["Sexo"]){
        
        $Sexo=$_GET["Sexo"];
        $contador+=1;
        
    }
 
    $lista = ['Indicador'=>$contador,'Nombre'=>$nombre,'Edad'=>$edad,'Sexo'=>$Sexo];
    
    return $lista;
}

$Datos=Validar();


?> 

<h1>DATOS:</h1>
<ul>
<?php

foreach($Datos as $x => $x_value) {
    If($x!='Indicador'){
    echo  $x . ": " . $x_value;
    echo "<br>";}
}



/*
$Datos=Validar();
if ($Datos[0]!=3){
    echo "DatoNoEncontrado";
}else{
    ?>
    
<?php   
for ( $inx = 1; $inx < count($Datos); $inx +=1 ) {

    echo  "<li>".$Datos[$inx]."</li>";
    
    
}

}

*/
?>
</ul>



