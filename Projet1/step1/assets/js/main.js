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
      if (item.showCharSelect) {
          $('.CharSelect').show();
      } else {
          $('.CharSelect').hide();
      }
    }
});

$('button').click(function() {
  var buttonId = $(this).attr('id');

  fetch(`https://welcome-menu/getUIResponse`, {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json; charset=UTF-8',
    },
    body: JSON.stringify({
        response: buttonId
    })
  }).then(resp => resp.json()).then(resp => console.log(resp));
})
