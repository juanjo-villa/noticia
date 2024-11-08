// Contador de IDs para las noticias
let newsIdCounter = 100;

// Evento que se dispara cuando la página está completamente cargada
document.addEventListener('DOMContentLoaded', function () {
  noticiasIniciales();
});

// Función para mostrar las noticias iniciales
function noticiasIniciales() {
  console.log("Página cargada, mostrando noticias iniciales.");

  // Noticias predefinidas
  const noticiasPredefinidas = [
    {
      titulo: "La Federación Colombiana de Fútbol festejó 100 años de historia",
      descripcion: "El ente que rige la práctica del deporte más popular del país fue fundado el 12 de octubre de 1924.",
      imagen: "https://www.elespectador.com/resizer/v2/B3WUJZD5DBFQDLK4PRVCEJCWSI.jpg?auth=9bbf142dbf0181dcb43b3fa01fb1e4c6869bc11ae4fbe28063ef2f4518e80b56&width=920&height=613&smart=true&quality=60"
    },
    {
      titulo: "Elon Musk presenta el CyberCab, el taxi sin conductor de Tesla con mucho show y pocas certezas",
      descripcion: "El Cyber Cab es un automóvil estilizado plateado cuyas baterías se recargan por inducción en vez de conectarse con un enchufe, no cuenta ni con volante ni con pedales de aceleración o frenado.",
      imagen: "https://www.designboom.com/twitterimages/uploads/2024/10/elon-musk-tesla-cybertaxi-autonomous-car-we-robot-designboom-fb.jpg"
    },
    {
      titulo: "“Fueron un poco bruscos”: Luisito Comunica explicó qué pasó con su detención en República Dominicana",
      descripcion: "El creador de contenido mexicano explicó las razones por las cuales fue arrestado en el país caribeño.",
      imagen: "https://estaticos.elcolombiano.com/binrepository/847x565/66c0/780d565/none/11101/XCEA/luisito-comunica_46046350_20240912171411.jpg"
    }
  ];

  // Iterar sobre las noticias predefinidas y añadirlas al HTML
  noticiasPredefinidas.forEach((noticia) => {
    var id = newsIdCounter++;
    var noticiaHTML = generarHTMLNoticia(id, noticia);
    document.getElementById('noticias').insertAdjacentHTML('beforeend', noticiaHTML);
  });
}

// Función para agregar una nueva noticia desde el formulario
function agregarNoticia() {
  var titulo = document.getElementById('cTitulo').value;
  var descripcion = document.getElementById('cDescripcion').value;
  var imagen = document.getElementById('cImagen').value;

  // Verificar si todos los campos están completos
  if (titulo && descripcion && imagen) {
    var id = newsIdCounter++;
    var noticia = {
      titulo: titulo,
      descripcion: descripcion,
      imagen: imagen
    };
    var noticiaHTML = generarHTMLNoticia(id, noticia);

    // Añadir la noticia al contenedor
    document.getElementById('noticias').insertAdjacentHTML('beforeend', noticiaHTML);

    // Limpiar los campos del formulario
    document.getElementById('cTitulo').value = '';
    document.getElementById('cDescripcion').value = '';
    document.getElementById('cImagen').value = '';
  } else {
    alert("Por favor, completa todos los campos.");
  }
}

// Función para generar el HTML de una noticia
function generarHTMLNoticia(id, noticia) {
  return `
    <article id="post-${id}" class="col-md-4 noticia text-center">
      <img src="${noticia.imagen}" class="img-rounded img-responsive" alt="${noticia.titulo}">
      <h3>${noticia.titulo}</h3>
      <p>${noticia.descripcion}</p>
      <div>
        <button onclick="addLike(${id})">Like</button> 
        <span id="like-${id}">0</span>
        <button onclick="addDislike(${id})">Dislike</button> 
        <span id="dislike-${id}">0</span>
      </div>
      <button onclick="removePost(${id})">Eliminar</button>
    </article>
  `;
}

// Función para aumentar el contador de likes
function addLike(id) {
  const likeElement = document.getElementById(`like-${id}`);
  likeElement.innerHTML = parseInt(likeElement.innerHTML) + 1;
}

// Función para aumentar el contador de dislikes
function addDislike(id) {
  const dislikeElement = document.getElementById(`dislike-${id}`);
  dislikeElement.innerHTML = parseInt(dislikeElement.innerHTML) + 1;
}

// Función para eliminar una noticia
function removePost(id) {
  const postElement = document.getElementById(`post-${id}`);
  postElement.remove();
}
