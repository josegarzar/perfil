<?php
include("data/datos.php");
include("fecha.php");

include("inc/navbar-paciente.php");


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


?>

<!DOCTYPE html>
<html lang="en" style="height: 100%;">
  <head >
    <title>Nombre Del Proyecto</title>
    <!-- Required meta tags -->
    <meta charset="utd-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  </head>
  
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top text-center perso d-xl-none d-lg-none">
  <a class="navbar-brand d-lg-none d-xl-none" href="inicio.php">
    <img src="logo3.png" width="135" height="20" alt="">
  </a>

  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Perfil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Citas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Historial Médico</a>
      </li>
    </ul>
    <hr>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 alinear">
      <li class="nav-item">
        <a class="nav-link" href="inicio.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Salir</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 mr-md-0 col-10" type="search" placeholder="Buscar">
      <button class="btn btn-outline-light my-2 my-sm-0 col-2" type="submit"><i class="fas fa-search" style="font-size: 0.8em;"></i></button>
    </form>
  </div>
</nav>


<!-- Barra superior para la busqueda etc 

<nav class="navbar navbar-expand-lg navbar-dark fixed-top text-center perso">
  <a class="navbar-brand d-lg-none d-xl-none" href="#">
    <img src="logo3.png" width="135" height="20" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 estilo">

      <li class="nav-item mr-5 pr-5 alineacion">
        <a href="index.php"><p class="text-white lead"><i class="fas fa-angle-left ml-3" aria-hidden="true"></i> Inicio</p></a>
      </li> 

    -->
      
      <!--
      <li class="nav-item">
        <a class="nav-link ml-5 pr-5" href="#">INICIO<span class="sr-only">(current)</span></a>
      </li> -->


      <!--
      <li class="nav-item">
        <a class="nav-link ml-5 pl-5 pr-5" href="#">SERVICIO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-5" href="#">CONTACTO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-5" href="#">AYUDA </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 mr-md-0 col-10" type="search" placeholder="Buscar">
      <button class="btn btn-outline-light my-2 my-sm-0 col-2" type="submit"><i class="fas fa-search" style="font-size: 0.8em;"></i></button>
    </form>
  </div>
</nav> 

-->




  <body class="fondo-blanco">
    <!-- navbar -->
    
      <div class="row no-gutters exacto">
        <div class="col-lg-10 sidepanel-second">
          <!-- <a href="index.php"><p class="text-muted lead d-none d-sm-block"><i class="fas fa-angle-left ml-3" aria-hidden="true"></i> Inicio</p></a> -->
          <h5 class="pl-4 d-block d-lg-none mt-3"><Strong>Innorbitx</Strong></h5>
            <h5 class="pl-4 d-block d-lg-none">Consultorio Médico</h5>
            <div class="container bajar-texto">
              <p class="pt-4 text-center lead d-block text-secondary ">Información de usuario</p>


              <div class="ml-3 mr-3 card d-block movimiento-arriba">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row["nombre"] . " " . $row2["apellido"]; ?></h5>
                  <h5 class="card-subtitle mb-3 text-muted"><?php echo $row3["id_paciente"]; ?></h5>
                  <hr>
                    <div class="personal-information">
                      <h6 class="card-subtitle mb-2 lead text-small"><?php echo "Edad: " . "<Strong>" . $row4["edad"] . " años</Strong>"; ?></h6>
                      <h6 class="card-subtitle mb-2 lead text-small"><?php echo "Peso: " . "<Strong>" . $row5["peso"] . " kg</Strong>"; ?></h6>
                      <h6 class="card-subtitle mb-2 lead text-small"><?php echo "Estatura: " . "<Strong>" . $row6["altura"] . " mts</Strong>"; ?></h6>
                    <!--    <h6 class="card-subtitle mb-4 lead text-small">
                       */ <?php 
                        if ($alergia != NULL) {
                        echo "Alergia (médicamentos): " . "<Strong>" . $alergia . "</Strong>"; 
                        }
                      ?></h6>   -->
                      <h6 class="card-subtitle mt-4 mb-4 lead text-small"><?php echo "Cliente desde: " . "<Strong>" . $row7["registro"] . "</Strong>"; ?></h6>      
                    </div>
                    <div class="text-center font-weight-normal">
                      <a href="#" class="card-link">Historial Médico</a>
                      <a href="#" class="card-link">Citas</a>
                    </div>
                  </div>
                </div>



                <div class="schedule-table mb-2">
                  <p class="pt-5 text-center lead d-block text-secondary">Ultimas citas (ultimos 7 días)</p>
                  <div class="card ml-3 mr-3 mt-3 movimiento-arriba">
                      <ul class="list-group list-group-flush justify">
                        <?php foreach (array_combine($citas, $fechas) as $cita => $fecha) {
                              echo '<li class="list-group-item">' . $cita . "." . '<p style="text-align: right; color: #84D5ED;"><Strong>&#8212; ' . $fecha . '</Strong></p>';              
                        } ?>
                      </ul>
                    </div>
                </div>

                <div class="schedule-table mb-5">
                  <p class="pt-5 text-center lead d-block text-secondary">Ultimas citas (ultimos 7 días)</p>
                  <div class="card ml-3 mr-3 mt-3 movimiento-arriba">
                      <ul class="list-group list-group-flush justify">
                        <?php foreach (array_combine($citas, $fechas) as $cita => $fecha) {
                              echo '<li class="list-group-item">' . $cita . "." . '<p style="text-align: right; color: #84D5ED;"><Strong>&#8212; ' . $fecha . '</Strong></p>';              
                        } ?>
                      </ul>
                    </div>
                </div>
                <div class="parallax">
                  <p class="espaciado text-white text-justify">"Gracias por formar parte de nuestra plataforma, recuerda que en caso de requerir ayuda adicional o dudas sobre como visualizar los datos de tu historial médico puedes visitar la sección de ayuda"</p>
                  <p class="espaciado text-white text-center pb-5">&#8212; El equipo INNORTBIX</p>
               <!--   <div class="row secciones-tres">
                    <div class="col-lg bg-white secciones-tres-individual">
                      <h3 class="mb-4 text-center">Objetivo</h3>
                      <p>Nuestro objetivo es brindarle posibilidades a todas las personas que vienen a NL en busca de un empleo y cuentan con pocos antecedentes o estudios para las empresas que aplican.</p>
                      <p>Explora las posibilidades, conecta con cientos de empleadores alrededor de la ciudad que requieren de servicios tales como los que to puedes ofrecer.</p>
                    </div>
                    <div class="col-lg bg-white secciones-tres-individual">
                      <h3 class="mb-4 text-center">Conócenos</h3>
                      <p>El sitio fue creado para todas aquellas personas que son menos preciadas por venir de otro estado, que cuentan con pocas posibilidades para desarrollarse educativamente, que tienen una mentalidad de emprendedor y que buscan nuevos horizontes en el cual triunfar, es eso mismo lo que nos motiva a darle el apoyo necesario para que un nivel bajo de estudios no sea un impedimento.</p>
                      <p>Creemos plenamente que todos merecemos oportunidades que nos hagan crecer, empezando por lo más mínimo que es lo que realmente en un futuro es lo que más valoramos y nos brinda la posibilidad de desarrollarnos aún más en lo que más queremos.</p>
                      <p>Diseñado para darle al usuario la mejor opción, tanto para personas que se dan a conocer como empleadores, asegurando que ambas partes se sientan conformes con los resultados.</p>
                    </div>
                    <div class="col-lg bg-white secciones-tres-individual">
                      <h3 class="mb-4 text-center">Ventajas</h3>
                      <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action"><strong>Conecta con Personas</strong>: Empleadores e individuales podran contactarse contigo.</a>
                        <a href="#" class="list-group-item list-group-item-action"><strong>Faciliad de Busqueda</strong>: A un clic de encontrar el trabajo que deseas.</a>
                        <a href="#" class="list-group-item list-group-item-action"><strong>Explora por Categorias</strong>: Justo lo que buscas en un mismo lugar.</a>
                        <a href="#" class="list-group-item list-group-item-action"><strong>Date a Conocer</strong>: Muestra tus habilidades en tu perfil.</a>
                        <a href="#" class="list-group-item list-group-item-action"><strong>Encuentra Empresas</strong>: Si te interesa un puesto solo contacta con ellos inmediatamente.</a>
                        <a href="#" class="list-group-item list-group-item-action"><strong>Recibe Rating</strong>: Al finalizar en una empresa podras recibir una puntaje por tu desempeño.</a>
                      </div>
                    </div>
                  </div> -->
                </div>
                <div class="schedule-table mb-5">
                  <p class="pt-5 text-center lead d-block text-secondary">Ultimas citas (ultimos 7 días)</p>
                  <div class="card ml-3 mr-3 mt-3 movimiento-arriba">
                      <ul class="list-group list-group-flush justify">
                        <?php foreach (array_combine($citas, $fechas) as $cita => $fecha) {
                              echo '<li class="list-group-item">' . $cita . "." . '<p style="text-align: right; color: #84D5ED;"><Strong>&#8212; ' . $fecha . '</Strong></p>';              
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
          
        <?php include("inc/nav-side.php"); ?>
     </div>


     







      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     


  </body>