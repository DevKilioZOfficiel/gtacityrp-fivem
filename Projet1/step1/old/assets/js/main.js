// DEV BY MATEO MROZEK
// 23 JUILLET 2023


const imageContainers = document.querySelectorAll('.gtacity-profil');

imageContainers.forEach((imageContainer) => {
  imageContainer.addEventListener('mousemove', (e) => {
    const xAxis = (window.innerWidth / 2 - e.pageX) / 25;
    const yAxis = (window.innerHeight / 2 - e.pageY) / 25;

    imageContainer.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
  });

  imageContainer.addEventListener('mouseleave', () => {
    imageContainer.style.transform = 'rotateY(0) rotateX(0)';
  });
});

// API

window.addEventListener('message', function(event) {
    var item = event.data;
    if (item.type === 'menu') {
      if (item.hideCharSelect) {
          $('.CharSelect').hide();
      } else {
          $('.CharSelect').show();
      }
    }
});

$('#closeButton').click(function() {
    $('.CharSelect').hide();
})