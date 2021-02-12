<?php 
if(isset($_POST["Name"]))
{
  $Name = $_POST["Name"];
  switch ($Name) {
    case '':
      $Answer = new stdClass();
      $Answer->mensaje = "Por favor Verifique sus datos.";
      echo json_encode($Answer);
      break;
    
    default:
      include("Connection.php");
      $Age = $_POST["Age"];
      $Save = "INSERT INTO datos (Name, Age)VALUES('$Name','$Age')";
      $Answer = new stdClass();
      if($Connection->query($Save)){
        $Answer->mensaje = "¡Sus datos se han guardado exitosamente!";
      }else{
        $Answer->mensaje = "Por favor Verifique sus datos.";
      }
      echo json_encode($Answer);
      break;
  }
 
  
}
?>