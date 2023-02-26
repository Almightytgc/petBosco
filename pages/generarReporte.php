<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--estilo principal-->
    <link rel="stylesheet" href="../assets/css/">
    <!--archivo general-->
    <link rel="stylesheet" href="../assets/css/general.css">
    <!--fav icon-->
    <link rel="shortcut icon" href="../logos/logo.png" />
    
    <!--links para boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    
    <title>PetBosco</title>
</head>
<body class="text-center">
  <!--inicio de nav-->
  <header class="p-3 encabezado">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><h1 class="navName">PetBosco</h1></li>
        </ul>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Iniciar sesión</button>
          <button type="button" class="btn btn-warning">Registrarse</button>
        </div>
      </div>
    </div>
  </header>
  <!--fin de nav-->

<div class="logoContainer">
    <img src="../logos/logo.png" alt="">
</div>


<!--inicio form-->
  <main class="form-signin  m-auto">
  <form action="sendReporte.php" method="post">
    <h1 class="h3 mb-3 fw-normal"><b>Generar reporte médico</b></h1>

    <div class="form-floating">
        <!--name: chequeoGeneral-->
      <input type="text" name="chequeoGeneral" class="form-control" id="floatingInput" placeholder="Descripción de chequeo general">
      <label for="floatingInput">Descripción de chequeo general</label>
    </div>
    <br>
    <div class="form-floating">
        <!--name: medicamento-->
      <input type="text" name="medicamento" class="form-control" id="floatingPassword" placeholder="Medicamento recetado">
      <label for="floatingPassword">Medicamento recetado</label>
    </div>
    <br>
    <div class="form-floating">
        <!--name: tratamiento-->
      <input type="text" name="tratamiento" class="form-control" id="floatingPassword" placeholder="Tratamiento">
      <label for="floatingPassword">Tratamiento</label>
    </div>
    <br>
    <div class="form-floating">
        <!--name: fecha-->
      <input type="date" name="fecha" class="form-control" id="floatingPassword" placeholder="Tratamiento" min="2023-02-01" max="2023-12-31">
      <label for="floatingPassword">Fecha</label>
    </div>
    <br>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Guardar</button>
  </form>
</main>

<!--final form-->
    

<!--inicio de footer-->
  <div class=" containerFooter">
  <footer class="py-3 my-4">
    <h3 class="nav justify-content-center">PetBosco Colegio Don Bosco 2023</h3>
  </footer>
</div>
<!--fin de footer-->
</body>
</html>