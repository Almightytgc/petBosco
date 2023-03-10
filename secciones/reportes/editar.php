<?php include("../../conexionBd.php"); 

/*codigo para hacer la consulta a la base de datos*/
$sentencia = $conexion->prepare("SELECT * FROM reportemedico");
$sentencia->execute();
$lista_reportes=$sentencia->fetchAll(PDO::FETCH_ASSOC);

//actualizar
if($_POST) {

  /* recolectamos los datos */
  $txtID = (isset($_POST['txtID']))?$_POST['txtID']:"";
  /* validamos si existe un dato para nombredelpuesto, de lo contrario va a quedar en blanco */
  $chequeoGeneral = (isset($_POST['chequeogeneral']))?$_POST["chequeogeneral"]:"";
  $medicamento = (isset($_POST['medicamento']))?$_POST["medicamento"]:"";
  $tratamiento = (isset($_POST['tratamiento']))?$_POST["tratamiento"]:"";
  $fechareporte = (isset($_POST['fechareporte']))?$_POST["fechareporte"]:"";

  
  
  /* preparamos la insercción o sentencia sql */
  $sentencia = $conexion->prepare("UPDATE reportemedico SET chequeogeneral=:chequeogeneral, medicamento=:medicamento, tratamiento=:tratamiento, fecha=:fechareporte WHERE id_reporte=:id_reporte");
  
  //asigando los valores que vienen del método post (que vienen del formulario)
  $sentencia->bindParam(":chequeogeneral",$chequeoGeneral);
  $sentencia->bindParam(":medicamento",$medicamento);
  $sentencia->bindParam(":tratamiento",$tratamiento);
  $sentencia->bindParam(":fechareporte",$fechareporte);

  $sentencia->execute();
  
  
      header("Location: index.php");
  }

?>


<?php include("../../templates/header.php");?>

<img src="../../logos/logo.png" alt="logo">

<div class="card m-auto text-center">
    <div class="card-header">
        Editar reporte médico
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

        <div class="mb-3">
          <label for="" class="form-label">ID</label>
          <input type="text"
          value = "<?php echo $txtID;?>"
            class="form-control" readonly name="txtID" id="txtID" aria-describedby="helpId" placeholder="ID">
        </div>

        <div class="mb-3">
              <label for="" class="form-label">Descripción del chequeo general</label>
              <input type="text"
              value = "<?php echo $chequeoGeneral;?>"
                class="form-control" name="chequeogeneral" id="chequeogeneral" aria-describedby="helpId" placeholder="Nombre del puesto">
          </div>


            <div class="mb-3">
              <label for="" class="form-label">Medicamento</label>
              <input type="text"
              value = "<?php echo $medicamento?>"
                class="form-control" name="medicamento" id="medicamento" aria-describedby="helpId" placeholder="Nombre del puesto">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Tratamiento</label>
              <input type="text"
              value = "<?php echo $tratamiento?>"
                class="form-control" name="tratamiento" id="tratamiento" aria-describedby="helpId" placeholder="Nombre del puesto">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Fecha</label>
              <input type="date"
              value = "<?php echo $fechareporte?>"
                class="form-control" name="fechareporte" id="fechareporte" aria-describedby="helpId" placeholder="Nombre del puesto">
            </div>
            <button type="submit" class="btn btn-success">Agregar</button>
            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>                    
        </form>
    </div>

</div>
<?php include("../../templates/footer.php");?> 