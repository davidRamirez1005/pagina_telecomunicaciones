
import scrollTopButton from "./boton.js";
import hamburgerMenu from "./hamburguesa.js";

const d = document;

d.addEventListener("DOMContentLoaded",()=>{
    hamburgerMenu(".panelBtn",".panel",".menu a")
    scrollTopButton(".scroll-top-btn")
})
// Get the modal element
const modal = document.getElementById('videoModal');

// Get the video player element
const videoPlayer = document.getElementById('videoPlayer');

// Get all the circle images
const circleImages = document.querySelectorAll('.circle img');

// Add click event listener to each circle image
circleImages.forEach((image) => {
  image.addEventListener('click', () => {
    const videoSrc = image.dataset.video;
    // Set the video source
    videoPlayer.src = videoSrc;
    // Show the modal
    modal.style.display = 'block';
  });
});

// Close the modal when the user clicks on the close button
const closeButton = document.querySelector('.close');
closeButton.addEventListener('click', () => {
  // Pause the video
  videoPlayer.pause();
  // Clear the video source
  videoPlayer.src = '';
  // Hide the modal
  modal.style.display = 'none';
});

// Close the modal when the user clicks outside of it
window.addEventListener('click', (event) => {
  if (event.target === modal) {
    // Pause the video
    videoPlayer.pause();
    // Clear the video source
    videoPlayer.src = '';
    // Hide the modal
    modal.style.display = 'none';
  }
});
