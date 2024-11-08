(function () {

    //alert("Ready Dom!!!");
    console.log(" Cargando Noticias");
  
  
  })();
  
  function cargaInicial() {
    const url = "https://pokeapi.co/api/v2/pokemon/";
  
    for (let index = 1; index < 100; index++) {
      fetch(url+index)
      .then(response => response.json())
      .then(data => mostrarBicho(data));
      
    }
  }
  
  function agregarPost($html) {
    document.getElementById("contenedorPokemones").innerHTML += $html;
    }
  
    function mostrarBicho(pokemon) {
      let id = pokemon.id;
      let name = pokemon.name;
      let height = pokemon.height;
      let weight = pokemon.weight;
      let abilities = pokemon.abilities.map(ability => ability.ability.name).join(", ");  
      let types = pokemon.types.map(type => type.type.name).join(", ");
      let moves = pokemon.moves.slice(0, 5).map(move => move.move.name).join(", "); // Muestra solo los primeros 5 movimientos
      
      let image = pokemon.sprites.other['official-artwork'].front_default;
    
      let nuevo_html = `<div class="row post" id="${id}">
                             <div class="row">
                                 <div class="col-sm-4">
                                   <img class="img-thumbnail" alt="Pokemon" src="${image}" /> 
                                 </div>
                                 <div class="col-sm-4">
                                   <h5> ${id} - ${name}  </h5>
                                   <p> Con una altura de ${height}M y un peso de ${weight}KG </p>
                                   <p> Habilidades: ${abilities} </p>
                                   <p> Tipos: ${types} </p> <!-- Mostramos los tipos -->
                                   <p> Movimientos: ${moves} </p> <!-- Mostramos los movimientos -->
                                 </div>
                               </div>
                               <div class="row">
                                 <div class="col-sm-3"> Fechas</div>
                                 <div class="col-sm-3"><i onclick="addLike('like${id}')" class="bi bi-hand-thumbs-up-fill"></i> <span id='like${id}'>0</span> </div>
                                 <div class="col-sm-3"><i class="bi bi-hand-thumbs-down-fill"></i></div>
                                 <div class="col-sm-3"><i onclick="remove(${id})" class="bi bi-x-circle-fill"></i></div>
                               </div>
                           </div>`;
    
      agregarPost(nuevo_html);
  }
  
  
  function addLike(id) {
  
    let actual = document.getElementById(id).innerHTML;
    let nuevo = parseInt(actual) + 1;
    document.getElementById(id).innerHTML = nuevo;
  }