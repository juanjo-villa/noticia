<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$tipo = isset($_GET['tipo']) ? $_GET['tipo'] : 'ALL';
include("conexion.php");

// Define la consulta en el archivo principal
$consulta  = "SELECT * FROM noticia WHERE tipo = 'farandula'";

$resultado = $conexion->query($consulta);

if (!$resultado) {
    die("Error en la consulta SQL: " . $conexion->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farandula</title>
    <link rel="stylesheet" href="../css/micss.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" />


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"

    />

    <script type="text/javascript" src="../javascript/script.js"></script>

</head>
<body>
  <div id="contenedor" class="container">

    <div class="row">
        <header class="text-center">
            <h1>Farandula</h1>
        </header>
    </div>

    <!-- Navigation Menu -->
    <div class="row nav barmenu">
          <div class="col-sm-3 text-center noticia"><a href="farandula.php">farandula</a></div>
          <div class="col-sm-3 text-center noticia"><a href="deporte.php">deporte</a></div>
          <div class="col-sm-3 text-center noticia"><a href="ciencia.php">ciencia</a></div>
          <div class="col-sm-3 text-center noticia"><a href="index.php">inicio</a></div>
          <div class="col-sm-3 text-center noticia"><a href="appiPokemon.php">AppPokemon</a></div>
  
      </div>
        
    <!-- Form to Add News -->
    <section>
        <div class="row mb-4 noticia">
            <div class="col-md-8 offset-md-2">
                <div class="input-group mb-3">
                    <input
                        type="text"
                        id="cTitulo"
                        class="form-control"
                        placeholder="Escribe un título..."
                    />
                    <input
                        type="text"
                        id="cDescripcion"
                        class="form-control"
                        placeholder="Escribe la descripción..."
                    />
                    <input
                        type="text"
                        id="cImagen"
                        class="form-control"
                        placeholder="URL de la imagen..."
                    />
                    <button class="btn btn-primary " onclick="agregarNoticia()">
                        Agregar Noticia
                    </button>
                </div>
            </div>
        </div>
    </section>

    
    <section id="noticias" class="row mt-4">
    </section>

    <div class="row noticia button" id="contenedorNoticias">
      <?php
      while ($obj = $resultado->fetch_object()) {
        $id = $obj->id;
        $likes = $obj->likes ?? 0;   // Asegúrate de que existen los campos `likes` y `dislikes` en la tabla
        $dislikes = $obj->dislikes ?? 0;
      ?>
        <div class="row post">
          <div class="row">
            <div class="col-sm-4">
              <img class="img-thumbnail" alt="Noticia" src="<?php echo $obj->imagen; ?>" />
            </div>
            <div class="col-sm-4">
              <h5><?php echo $obj->titulo; ?></h5>
            </div>
          </div>
          <div class="row">
            <p><?php echo $obj->descripcion; ?></p>
          </div>
          <div class="row">
            <div class="col-sm-3"><?php echo $obj->fecha_creacion; ?></div>
            
            <!-- Botones de Like, Dislike y Eliminar -->
            <div class="col-sm-3">
              <button onclick="addLike(<?php echo $id; ?>)">Like</button>
              <span id="like-<?php echo $id; ?>"><?php echo $likes; ?></span>
            </div>
            <div class="col-sm-3">
              <button onclick="addDislike(<?php echo $id; ?>)">Dislike</button>
              <span id="dislike-<?php echo $id; ?>"><?php echo $dislikes; ?></span>
            </div>
            <div class="col-sm-3">
              <button onclick="removePost(<?php echo $id; ?>)">Eliminar</button>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>

    <footer>
      <div class="row nav barmenu">
        <div class="col-sm-3 text-center noticia"><a href="https://www.facebook.com/?locale=es_LA">Facebook</a></div>
        <div class="col-sm-3 text-center noticia"><a href="https://www.instagram.com/">Instagram</a></div>
        <div class="col-sm-3 text-center noticia"><a href="https://github.com/">GitHub</a></div>
  
    </div>
      
    </footer>

</div>

    
</body>
</html>