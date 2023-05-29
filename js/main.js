
import scrollTopButton from "./boton.js";
import hamburgerMenu from "./hamburguesa.js";


const d = document;

d.addEventListener("DOMContentLoaded",()=>{
    hamburgerMenu(".panelBtn",".panel",".menu a")
    scrollTopButton(".scroll-top-btn")
})


$(document).ready(function() {
  // Obtener el modal y el contenedor del video
  let modal = $("#modal");
  let videoContainer = $("#video-container");
  let videoFrame = $("#video-frame");

  // Controlar el clic en una carta
  $(".card.picture").click(function() {
    // Obtener el ID del video desde el atributo data-video
    let videoId = $(this).data("video");
    
    // Generar la URL del video de YouTube
    let videoUrl = "https://www.youtube.com/embed/" + videoId;
    
    // Establecer la URL del video en el iframe del modal
    videoFrame.attr("src", videoUrl);
    
    // Mostrar el modal
    modal.show();
  });

  $(document).ready(function() {
    // Obtener el modal y el contenedor del video
    var modal = $("#modal");
    var videoContainer = $("#video-container");
    var videoFrame = $("#video-frame");
  
    // Controlar el clic en una carta
    $(".card.picture").click(function() {
      // Obtener el ID del video desde el atributo data-video
      var videoId = $(this).data("video");
      
      // Generar la URL del video de YouTube
      var videoUrl = "https://www.youtube.com/embed/" + videoId;
      
      // Establecer la URL del video en el iframe del modal
      videoFrame.attr("src", videoUrl);
      
      // Mostrar el modal
      modal.show();
    });
  
    // Controlar el clic en el botón de cierre del modal
    $(".modal .close").click(function() {
      // Detener la reproducción del video
      videoFrame.attr("src", "");
      
      // Ocultar el modal
      modal.hide();
    });
  
    // Controlar el clic fuera del modal para cerrarlo
    $(window).click(function(event) {
      if (event.target == modal[0]) {
        // Detener la reproducción del video
        videoFrame.attr("src", "");
        
        // Ocultar el modal
        modal.hide();
      }
    });
  });
});

