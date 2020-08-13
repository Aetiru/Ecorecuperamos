<?php

include('php/connect.php');

if ( !empty( $_POST ) ){
    if ( isset( $_POST["send"] ) ){
        //Recuperacion de variables
        $name = mysqli_real_escape_string($conexion, $_POST['name']);
        $identificacion = mysqli_real_escape_string($conexion, $_POST['identificacion']);
        $email = mysqli_real_escape_string($conexion, $_POST['email']);
        $departamento = mysqli_real_escape_string($conexion, $_POST['departamento']);
        $ciudad = mysqli_real_escape_string($conexion, $_POST['ciudad']);
        $direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
        $asunto = mysqli_real_escape_string($conexion, $_POST['asunto']);
        $remitente = mysqli_real_escape_string($conexion, $_POST['remitente']);
        $mensaje = mysqli_real_escape_string($conexion, $_POST['mensaje']);
        $fecha = date('Y-m-d');

        
        $sql_pqr = "INSERT INTO pqr_informacion(Nombre_Apellido, Num_identificacion, Email, Departamento, Ciudad, Direccion, Asunto, Remitente, Mensaje, Fecha) VALUES ('$name', 
        '$identificacion', '$email', '$departamento', '$ciudad', '$direccion', '$asunto', '$remitente', '$mensaje', '$fecha')";

        $result_pqr = $conexion->query($sql_pqr);
        if($result_pqr > 0){
            echo "<script>
            alert('Registro Exitoso');
            
          </script>";
        }else{
            echo "<script>
            alert('Error');
          </script>";
        }

    }
}