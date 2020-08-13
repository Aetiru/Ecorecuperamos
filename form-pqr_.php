<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Iniciar sesion</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/1.png" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Your custom styles (optional) -->
  <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
  <!--<link rel="stylesheet" href="css/style.css">-->
  <style type="text/css">
    form{
     width:500px;
     padding:16px;
     border-radius:10px;
     margin:auto;

}
.btn-info {
    color: #fff;
    background-color: #8bc34a !important;
}
  </style>
    <script type="text/JavaScript">
        function validaDatos(formulario){
            if ((form.name.value.length == 0) || (form.identificacion.value.length == 0) || (form.email.value.length == 0) || (form.departamento.value.length == 0) || (form.ciudad.value.length == 0)|| (form.direccion.value.length == 0) || (form.asunto.value.length == 0) || (form.mensaje.value.length == 0) || (form.remitente.value.length == 0)){
                alert("¡Uno de los campos esta vacio!");
                return false;
            }
            if (!/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(form.email.value)){
                alert("Correo electronico invalido");
                return false;
            }
            return true;
        }

        function soloLetras(e){

            /*Validacion de solo caracteres*/ 
            key = e.keyCode || e.which;
            teclado = String.fromCharCode(key).toLowerCase();
            letras = "abcdefghijklmnñopqrstuvwxyz";
            especiales = "8-37-38-46-164";
            teclado_especiales = false;

            for ( var i in especiales){ 
                if( key == especiales[i]){
                    teclado_especiales = true; break;
                }
            }
            if( letras.indexOf(teclado) == -1 && !teclado_especiales){
                return false;
            }
        }
    </script>
            <?php include('php/pqr_insert.php'); ?>
            
    <style>
        .container-login100{
            width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
        }
    </style>

</head>
<body >
  <!-- Start your project here-->

<!-- Default form register -->
<!-- Default form contact -->
<!-- Default form contact -->
<html>
<body style="background-image: url(./rice-plantation-1822444_1920.jpg);  background-repeat: no-repeat; background-position: 100% 100%;">
    
<div  class="container-login100">
<form class="text-center border border-light p-5" action="" onsubmit=" return validaDatos(this);" id="form" value="1" style="background: #FFFFFF;">

    <p class="h4 mb-4">FORMULARIO PQR ECORECUPERAMOS</p>

    <!-- Name -->
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Nombre y Apellido" name="name-last_name">

     <!---->
     <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Numero de Identificacion" name="CC">

    <!-- Email -->
    <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Correo Electronico" name="Email">
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" name="Departamento" class="form-control" placeholder="Departamento" onkeypress="return soloLetras(event);" name="Departamento">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" name="Ciudad" class="form-control" placeholder="Ciudad" onkeypress="return soloLetras(event);" name="ciudad">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" name="Direccion" class="form-control" placeholder="Direccion" onkeypress="return soloLetras(event);" name="Direccion">
        </div>
    </div>

    <!-- Subject -->
    <label>Asunto</label>
    <select class="browser-default custom-select mb-4" name="asunto">
        <option value="" disabled>Asunto</option>
        <option value="1" selected>Peticion</option>
        <option value="2">Queja</option>
        <option value="3">Reclamo</option>
        <!--<option value="4">Feature request</option>-->
    </select>
    <!-- Subject -->
    <label>Tipo de Remitente</label>
    <select class="browser-default custom-select mb-4" name="remitente">
        <option value="" disabled>Tipo de Remitente</option>
        <option value="1" selected>Natural</option>
        <option value="2">Juridica</option>
        <!--<option value="3">Reclamo</option>-->
        <!--<option value="4">Feature request</option>-->
    </select>

    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Mensaje" name="mensaje"></textarea>
    </div>

    <!-- Copy -->
    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
    </div>

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit" name="send">Send</button>

</form>
</div>
</body>
</html>
<!-- Default form contact -->
<!-- Default form contact -->
<!-- Default form register -->
<!-- Default form login -->
  <!-- End your project here-->
  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
