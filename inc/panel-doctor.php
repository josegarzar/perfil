<?php 


include("data/datos-doctor.php");
include("inc/navbar-doctor.php");

$citas = array(
"Alucinaciones constantes y dolor de la cabeza en la parte frontal",
"Lesión de brazo",
"Fiebre",
"Dolor de estomago",
"Fractura de tobillo",
"Inflamación de rodilla"
);

$fechas = array(
"10 de Febrero del 2018",
"9 de Enero del 2018",
"2 de Enero del 2018",
"4 de Enero del 2018",
"5 de Enero del 2018",
"2 de Enero del 2018",



);


$result = mysqli_query($conn,'SELECT nombre, apellido, registro FROM pacienteinfo ORDER BY registro DESC LIMIT 5');

if($result === FALSE) {
    die(mysql_error("error message for the user")); 
}


?>

<!DOCTYPE html>
<html lang="en" style="height: 100%;">
  <head >
    <title>Perfil - Innorbitx</title>
    <!-- Required meta tags -->
    <meta charset="utd-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  </head>
  
  <body class="fondo-blanco">
    <!-- navbar -->
    
      <div class="row no-gutters exacto">
        <div class="col-lg-10 sidepanel-second">
          <!-- <a href="index.php"><p class="text-muted lead d-none d-sm-block"><i class="fas fa-angle-left ml-3" aria-hidden="true"></i> Inicio</p></a> -->
          <h5 class="pl-4 d-block d-lg-none mt-3"><Strong>Innorbitx</Strong></h5>
            <h5 class="pl-4 d-block d-lg-none">Consultorio Médico</h5>
            <div class="container bajar-texto">
              <p class="pt-4 text-center lead d-block text-secondary ">Información del doctor</p>


              <div class="ml-3 mr-3 card d-block movimiento-arriba">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row2["nombre"] . " " . $row3["apellido"]; ?></h5>
                  <h5 class="card-subtitle mb-3 text-muted"><?php echo $row4["id_doctor"]; ?></h5>
                  <hr>
                    <div class="personal-information">
                      <h6 class="card-subtitle mb-2 lead text-small"><?php echo "Edad: " . "<Strong>" . $row7["edad"] . " años</Strong>"; ?></h6>
                      <h6 class="card-subtitle mb-2 lead text-small"><?php echo "Cédula profesional: " . "<Strong>" . $row5["cedula"] . "</Strong>"; ?></h6>
                        <h6 class="card-subtitle mb-4 lead text-small">
                        <?php echo "Especialidad: " . "<Strong>" . $row8["especialidad"] . "</Strong>"; ?></h6>
                      <h6 class="card-subtitle mb-4 lead text-small"><?php echo "Fecha de alta en el consultorio: " . "<Strong>" . $row6["registro"] . "</Strong>"; ?></h6>      
                    </div>
                  </div>
                </div>



                <div class="schedule-table mb-2">
                  <p class="pt-5 text-center lead d-block text-secondary">Pacientes (Últimos 5 registrados)</p>
                  <div class="card ml-3 mr-3 mt-3 movimiento-arriba">
                      <ul class="list-group list-group-flush justify">
                        <?php while($row = $result->fetch_array()){ 
                              echo '<li class="list-group-item">' . $row["nombre"] . " " . $row["apellido"] . '<p style="text-align: right; color: #0F6FFF;"><Strong>&#8212; ' . $row["registro"] .'</Strong></p></a>';              
                        } ?>
                        <a href="pacientes.php"><li class="list-group-item text-center"><button type="submit" class="btn btn-outline-secondary text-center">Mostrar mas pacientes</button></li></a>
                      </ul>

                    </div>
                </div>

                <div class="schedule-table mb-5">
                  <p class="pt-5 text-center lead d-block text-secondary">Últimas citas (Últimos 7 días)</p>
                  <div class="card ml-3 mr-3 mt-3 movimiento-arriba">
                      <ul class="list-group list-group-flush justify">
                        <?php foreach (array_combine($citas, $fechas) as $cita => $fecha) {
                              echo '<li class="list-group-item">' . $cita . "." . '<p style="text-align: right; color: #0F6FFF;"><Strong>&#8212; ' . $fecha . '</Strong></p>';              
                        } ?>
                      </ul>
                    </div>
                </div>
                <div class="parallax">
                  <p class="espaciado text-white text-justify">"Gracias por formar parte de nuestra plataforma, recuerda que en caso de requerir ayuda adicional o dudas sobre como visualizar los datos de tu historial médico puedes visitar la sección de ayuda"</p>
                  <p class="espaciado text-white text-center pb-5">&#8212; El equipo INNORTBIX</p>
                </div>
                <div class="schedule-table mb-5">
                  <p class="pt-5 text-center lead d-block text-secondary">Ultimas citas (Últimos 7 días)</p>
                  <div class="card ml-3 mr-3 mt-3 movimiento-arriba">
                      <ul class="list-group list-group-flush justify">
                        <?php foreach (array_combine($citas, $fechas) as $cita => $fecha) {
                              echo '<li class="list-group-item">' . $cita . "." . '<p style="text-align: right; color: #0F6FFF;"><Strong>&#8212; ' . $fecha . '</Strong></p>';              
                        } ?>
                      </ul>
                    </div>
                </div>
              </div>
            
          <!--
          <div class="mb-1 mt-3 px-4 datos">
            <p><?php echo $nombre; ?></p>
            <p class="font-weight-bold datos-second"><?php echo $id; ?></p>
            <p class="datos-second"><?php echo $registro; ?></p>
          </div>  -->
          
        </div>

        <!--
        <div class="col-md-12 d-none d-md-block pt-5 text-white adios-second container-fluid">   
          <h1>INNORBITX</h1>          
            <p class="lead">Consultorio médico</p>
            <div class="seccion">
              <p class="lead mt-1">Usuario: </p>  
            </div>
            -->
          
        <?php include("inc/nav-side-doctor.php"); ?>
     </div>


     







      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     


  </body>