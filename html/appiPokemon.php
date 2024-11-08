<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <script type="text/javascript" src="scriptPokemon.js"></script>
    <style>
      body {
        background-color: lightgrey;
        /*margin: 20px;*/
      }

      .post {
        background-color: white;
        border-radius: 0.5em;
        margin: 5px;
        padding: 15px;
        border: 1px solid gray;
        width: 90%;
      }
    </style>
  </head>

  <body onload="cargaInicial()">

      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Programacion Web</a>
          </div>
          <ul class="nav navbar-nav">
            <li ><a href="index.html">Home</a></li>
            <li class="active"><a href="indexapi.html"> App API</a></li>
            <li><a href="indexapi2.html"> App Paises</a></li>
          </ul>
        </div>
      </nav>


    <div class="container">
      <div class="row">
        <div class="col-sm-12">Banner</div>
      </div>

      <div class="row" id="titulo">
        <div class="col-sm-12"><h1> Pokemones</h1></div>
      </div>

      <div class="row" id="contenedorPokemones">

        
      </div>

      <div class="row"></div>
      <div class="row">Footer</div>
    </div>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8cd98ef4f855f792","serverTiming":{"name":{"cfExtPri":true,"cfL4":true}},"version":"2024.8.0","token":"bb2b860569ca44c0b7016740aec5a17e"}' crossorigin="anonymous"></script>
</body>
</html>