<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciencia y Tecnología</title>
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
                <h1>Ciencia y Tecnología</h1>
            </header>
        </div>

        <div class="row nav barmenu">
          <div class="col-sm-3 text-center noticia"><a href="farandula.php">farandula</a></div>
          <div class="col-sm-3 text-center noticia"><a href="deporte.php">deporte</a></div>
          <div class="col-sm-3 text-center noticia"><a href="ciencia.php">ciencia</a></div>
          <div class="col-sm-3 text-center noticia"><a href="index.php">inicio</a></div>
          <div class="col-sm-3 text-center noticia"><a href="appiPokemon.php">AppPokemon</a></div>
  
      </div>
        
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
                        <button class="btn btn-primary" onclick="agregarNoticia()">
                            Agregar Noticia
                        </button>
                    </div>
                </div>
            </div>
        </section>

        
        <section id="noticias" class="row mt-4">
        </section>

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
