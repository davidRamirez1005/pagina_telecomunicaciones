setTimeout(() => 
    document.querySelector("header").style.transform = "translate(0px)", 700)

// EFECTO OPACITY

setTimeout(() => {
    document.querySelectorAll(".efectoOpacity").forEach((el) => {

        el.style.opacity = "1"
    })
}, 1000)

document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.link-animado');
    
    for (let i = 0; i < links.length; i++) {
      links[i].addEventListener('click', animateLink);
    }
    
    function animateLink(e) {
      e.preventDefault();
      
      const link = this;
      
      // Aplicar la animación antes de abrir el enlace
      link.classList.add('animacion-activa');
      
      setTimeout(function() {
        // Eliminar la animación después de cierto tiempo (ajusta el tiempo según tus necesidades)
        link.classList.remove('animacion-activa');
        
        // Abrir el enlace
        window.location.href = link.getAttribute('href');
      }, 300); // Tiempo de espera en milisegundos antes de abrir el enlace
    }
  });

    